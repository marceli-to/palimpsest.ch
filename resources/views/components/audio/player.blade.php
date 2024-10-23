@props(['audio_file'])
<div 
  class="audio-player bg-coral text-white p-16 lg:pl-32 lg:pr-16 lg:flex lg:items-center" 
  data-player="audio" 
  data-audio="/audio/{{ $audio_file }}">
  <div class="text-sm text-center lg:text-left mb-16 lg:mb-0 lg:min-w-180">
    {{ __('Erlebe das Hörstück') }}
  </div>

  <div class="flex flex-col lg:flex-row lg:items-center gap-4 lg:gap-20 lg:flex-1">

    <div class="flex items-center gap-4 flex-1">
      <div class="relative flex-1 h-3 lg:flex lg:justify-between bg-white rounded cursor-pointer" data-progress-container>
        <span class="text-xxs opacity-70 absolute left-0 top-16 lg:top-12" data-current-time>0:00</span>
        <div class="absolute left-0 top-0 h-full bg-white rounded" data-progress></div>
        <div class="absolute top-1/2 -translate-y-1/2 w-16 h-16 bg-white rounded-full" data-handle></div>
        <span class="text-xxs opacity-70 absolute right-0 top-16 lg:top-12" data-duration>12:45</span>
      </div>
    </div>

    <div class="flex justify-center lg:justify-start items-center gap-20 lg:gap-14 mt-16 lg:mt-0">
      <button data-rewind>
        <x-audio.icons.rewind class="w-auto h-30" />
      </button>
      <button data-play class="w-30 h-30 flex items-center justify-center">
        <x-audio.icons.play />
        <x-audio.icons.pause class="hidden" />
      </button>
      <button data-forward>
        <x-audio.icons.forward class="w-auto h-30" />
      </button>
    </div>
  </div>
</div>