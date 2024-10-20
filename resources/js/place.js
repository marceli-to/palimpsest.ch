const Places = (function() {
  let map;
  let markers = [];
  let selectedItem = null;
  const accordions = {};

  /* Init */
  function init() {
    initAccordion();
    loadMapboxScript().then(initMap);
  }

  /* Accordion */
  function initAccordion() {
    document.querySelectorAll('[data-accordion]').forEach(accordion => {
      const slug = accordion.dataset.location;
      const button = accordion.querySelector('[data-accordion-button]');
      const content = accordion.querySelector('[data-accordion-content]');
      accordions[slug] = { button, content };
      button.addEventListener('click', () => toggleAccordion(slug));
    });
  }

  function toggleAccordion(slug) {
    if (selectedItem === slug) {
      closeAccordion(slug);
      selectedItem = null;
    } else {
      if (selectedItem) {
        closeAccordion(selectedItem);
      }
      openAccordion(slug);
      selectedItem = slug;
    }
    updateMap(selectedItem);
  }

  function openAccordion(slug) {
    const { button, content } = accordions[slug];
    button.classList.add('is-active');
    content.style.maxHeight = `${content.scrollHeight}px`;
    content.style.opacity = '1';
  }

  function closeAccordion(slug) {
    const { button, content } = accordions[slug];
    button.classList.remove('is-active');
    content.style.maxHeight = '0px';
    content.style.opacity = '0';
  }

  /* Map */
  function loadMapboxScript() {
    return new Promise((resolve, reject) => {
      if (window.mapboxgl) {
        resolve();
        return;
      }
      const script = document.createElement('script');
      script.src = 'https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js';
      script.async = true;
      script.onload = resolve;
      script.onerror = reject;
      document.head.appendChild(script);
    });
  }

  function initMap() {
    const mapEl = document.getElementById('map');
    if (mapEl === null) return;

    mapboxgl.accessToken = 'pk.eyJ1IjoibWFyY2VsaXRvb29vIiwiYSI6ImNrMHNsdmhwdjAzcjIzZ3BldTlqdWhnaWEifQ.EWZE383Tn4xBt0E5pSXh6Q';
    const zoom = mapEl.dataset.mapZoom;
    const locations = JSON.parse(mapEl.dataset.mapLocations || '[]');

    map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/marcelitoooo/ck16ms7m51nlo1cmwnqrbjuyq?optimize=true',
      center: locations[0]?.coordinates,
      zoom: zoom
    });

    map.addControl(new mapboxgl.NavigationControl());
    //map.scrollZoom.disable();

    addMarkers(locations);
    fitMapToMarkers(locations);
  }

  function addMarkers(locations) {
    locations.forEach(location => {
      const el = document.createElement('div');
      el.className = 'marker';

      const marker = new mapboxgl.Marker(el)
        .setLngLat(location.coordinates)
        .addTo(map);

      el.addEventListener('click', () => {
        toggleAccordion(location.slug);
      });

      markers.push({ marker, slug: location.slug });
    });
  }

  function updateMap(activeSlug) {
    markers.forEach(({ marker, slug }) => {
      const el = marker.getElement();
      if (slug === activeSlug) {
        el.classList.add('is-active');
        map.flyTo({
          center: marker.getLngLat(),
          zoom: 15,
          duration: 600
        });
      } 
      else {
        el.classList.remove('is-active');
      }
    });

    if (!activeSlug) {
      fitMapToMarkers(JSON.parse(document.getElementById('map').dataset.mapLocations || '[]'));
    }
  }

  function fitMapToMarkers(locations) {
    if (locations.length > 1) {
      const bounds = new mapboxgl.LngLatBounds();
      locations.forEach(location => bounds.extend(location.coordinates));
      map.fitBounds(bounds, { padding: 50 });
    }
  }

  return {
    init
  };
})();

// Initialize the module when the DOM is ready
document.addEventListener('DOMContentLoaded', Places.init);