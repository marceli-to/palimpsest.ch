@props(['slug'])
@php 
use App\Models\Place;
$place = Place::with('locations.facts')->where('slug', $slug)->published()->firstOrFail();
@endphp
<!-- 432px / 206px -->
<header class="bg-royal text-white sticky top-0 z-50">
  <x-layout.inner class="flex items-center justify-between leading-none h-60 lg:h-92">
    <h2 class="text-2xl lg:text-4xl !mb-0">{{ $place->name }}</h2>
    <a 
      href="javascript:;" 
      x-on:click="show_menu = true; {{ !Request::routeIs('*.page.place') ? 'is_pages = false' : '' }}; $event.target.closest('html').classList.toggle('has_menu');">
      <x-icons.cross class="w-32 lg:w-58 h-auto" />
    </a>
  </x-layout.inner>
</header>
<x-layout.inner class="!px-0">
  <div class="grid grid-cols-12">
    <div class="order-2 lg:order-1 col-span-12 lg:col-span-6 lg:max-h-[calc(100vh_-_206px)] lg:overflow-y-auto lg:overflow-x-hidden" data-simplebar>
      @foreach ($place->locations as $location)
        <x-accordion.wrapper :location="$location" />
      @endforeach
    </div>
    <div class="order-1 lg:order-2 col-span-12 lg:col-span-6 flex flex-col gap-12 justify-start items-start">
      <div 
        id="map" 
        class="w-full min-h-[275px] lg:min-h-[calc(100vh_-_206px)]"
        data-map-zoom="12"
        data-map-locations='[
        @foreach ($place->locations as $location)
          { "coordinates": [{{ $location->longitude }}, {{ $location->latitude }}], "title": "{{ $location->title }}", "slug": "{{ $location->slug }}"}
          {{ !$loop->last ? ',' : '' }}
        @endforeach
        ]'>
      </div>
    </div>
  </div>
</x-layout.inner>
