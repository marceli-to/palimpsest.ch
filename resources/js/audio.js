const AudioPlayer = (function() {
	class Player {
			constructor(element) {
					// Store DOM element
					this.player = element;
					
					// Get audio source from data attribute
					this.audioSrc = this.player.dataset.audio;
					if (!this.audioSrc) {
							throw new Error('No audio source specified in data-audio attribute');
					}

					// Initialize controls using data attributes
					this.playPauseBtn = this.player.querySelector('[data-play]');
					this.playIcon = this.playPauseBtn.querySelector('[data-icon-play]');
					this.pauseIcon = this.playPauseBtn.querySelector('[data-icon-pause]');
					this.rewindBtn = this.player.querySelector('[data-rewind]');
					this.forwardBtn = this.player.querySelector('[data-forward]');
					this.progressBar = this.player.querySelector('[data-progress]');
					this.progressHandle = this.player.querySelector('[data-handle]');
					this.progressContainer = this.player.querySelector('[data-progress-container]');
					this.currentTimeEl = this.player.querySelector('[data-current-time]');
					this.durationEl = this.player.querySelector('[data-duration]');

					// Validate required elements
					this.validateElements();

					// Initialize audio
					this.audio = new Audio(this.audioSrc);

					// Initialize
					this.bindMethods();
					this.initializeEventListeners();
					this.initializeState();
			}

			validateElements() {
					const requiredElements = {
							playPauseBtn: '[data-play]',
							rewindBtn: '[data-rewind]',
							forwardBtn: '[data-forward]',
							progressBar: '[data-progress]',
							progressHandle: '[data-handle]',
							progressContainer: '[data-progress-container]',
							currentTimeEl: '[data-current-time]',
							durationEl: '[data-duration]'
					};

					for (const [key, selector] of Object.entries(requiredElements)) {
							if (!this[key]) {
									throw new Error(`Required element "${selector}" not found in audio player`);
							}
					}
			}

			bindMethods() {
					this.togglePlayPause = this.togglePlayPause.bind(this);
					this.updateProgress = this.updateProgress.bind(this);
					this.seek = this.seek.bind(this);
					this.setProgress = this.setProgress.bind(this);
			}

			initializeState() {
					// Set initial states
					this.currentTimeEl.textContent = '0:00';
					this.durationEl.textContent = '0:00';
					this.progressBar.style.width = '0%';
					this.progressHandle.style.left = '0%';
			}

			togglePlayPause() {
					// Pause all other players when this one plays
					if (this.audio.paused) {
							document.querySelectorAll('[data-player="audio"]').forEach(playerEl => {
									const player = playerEl.audioPlayer;
									if (player && player !== this && !player.audio.paused) {
											player.togglePlayPause();
									}
							});
					}

					if (this.audio.paused) {
							this.audio.play()
									.then(() => {
											this.playIcon.classList.add('hidden');
											this.pauseIcon.classList.remove('hidden');
									})
									.catch(error => {
											console.error('Error playing audio:', error);
									});
					} else {
							this.audio.pause();
							this.playIcon.classList.remove('hidden');
							this.pauseIcon.classList.add('hidden');
					}
			}

			updateProgress() {
					if (!this.audio.duration) return;
					
					const percent = (this.audio.currentTime / this.audio.duration) * 100;
					this.progressBar.style.width = `${percent}%`;
					this.progressHandle.style.left = `${percent}%`;
					this.currentTimeEl.textContent = this.formatTime(this.audio.currentTime);
			}

			formatTime(seconds) {
					const minutes = Math.floor(seconds / 60);
					const remainingSeconds = Math.floor(seconds % 60);
					return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
			}

			seek(seconds) {
					const newTime = Math.max(0, Math.min(this.audio.duration, this.audio.currentTime + seconds));
					if (isFinite(newTime)) {
							this.audio.currentTime = newTime;
					}
			}

			setProgress(e) {
					const bounds = this.progressContainer.getBoundingClientRect();
					const x = e.clientX - bounds.left;
					const percent = Math.min(Math.max(0, x / bounds.width), 1);
					if (isFinite(this.audio.duration)) {
							this.audio.currentTime = percent * this.audio.duration;
					}
			}

			initializeEventListeners() {
					// Audio events
					this.audio.addEventListener('loadedmetadata', () => {
							this.durationEl.textContent = this.formatTime(this.audio.duration);
					});
					this.audio.addEventListener('timeupdate', this.updateProgress);
					this.audio.addEventListener('ended', () => {
							this.playIcon.classList.remove('hidden');
							this.pauseIcon.classList.add('hidden');
					});

					// Control events
					this.playPauseBtn.addEventListener('click', this.togglePlayPause);
					this.rewindBtn.addEventListener('click', () => this.seek(-10));
					this.forwardBtn.addEventListener('click', () => this.seek(10));

					// Progress bar click event
					this.progressContainer.addEventListener('click', this.setProgress.bind(this));

					// Store instance reference on the element
					this.player.audioPlayer = this;

					// Keyboard controls
					document.addEventListener('keydown', (e) => {
							if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') return;
							
							switch (e.code) {
									case 'Space':
											e.preventDefault();
											this.togglePlayPause();
											break;
									case 'ArrowLeft':
											this.seek(-5);
											break;
									case 'ArrowRight':
											this.seek(5);
											break;
							}
					});
			}
	}

	// Initialize function
	function init() {
			const players = document.querySelectorAll('[data-player="audio"]');
			players.forEach(playerElement => {
					try {
							new Player(playerElement);
					} catch (error) {
							console.error(`Error initializing audio player:`, error);
					}
			});
	}

	return { init };
})();

// Auto-initialize when DOM is ready
document.addEventListener('DOMContentLoaded', AudioPlayer.init);