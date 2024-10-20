@props(['slug'])
@php 
use App\Models\Place;
$place = Place::with('locations.facts')->where('slug', $slug)->published()->firstOrFail();
@endphp
<header class="bg-royal text-white sticky top-0 z-50">
  <x-layout.inner class="flex items-center justify-between">
    <h2>{{ $place->name }}</h2>
    <a 
      href="javascript:;" 
      x-on:click="show_menu = true; {{ !Request::routeIs('*.page.place') ? 'is_pages = false' : '' }}; $event.target.closest('html').classList.toggle('has_menu');" 
      class="text-4xl">
      X
      </a>
  </x-layout.inner>
</header>
<x-layout.inner class="!px-0 lg:!px-32">
  <div class="grid grid-cols-12">
    <div class="order-2 lg:order-1 lg:pr-8 col-span-12 lg:col-span-6 lg:max-h-[calc(100vh-500px)] lg:overflow-y-auto lg:overflow-x-hidden" data-simplebar>
      @foreach ($place->locations as $location)
        <x-accordion.wrapper :location="$location" />
      @endforeach
    </div>
    <div class="order-1 lg:order-2 col-span-12 lg:col-span-6 flex flex-col gap-12 justify-start items-start">
      <div 
        id="map" 
        class="w-full min-h-[300px] lg:min-h-[500px]"
        data-map-zoom="10"
        data-map-locations='[
          @foreach ($place->locations as $location)
            {
              "coordinates": [{{ $location->longitude }}, {{ $location->latitude }}],
              "title": "{{ $location->title }}",
              "slug": "{{ $location->slug }}"
            }
            {{ !$loop->last ? ',' : '' }}
          @endforeach
        ]'>
      </div>
    </div>
  </div>
</x-layout.inner>
