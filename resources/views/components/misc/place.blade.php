@props(['slug'])
@php 
use App\Models\Place;
$place = Place::with('locations.facts')->where('slug', $slug)->published()->firstOrFail();
@endphp
<header class="bg-royal text-white">
  <x-layout.inner class="flex items-center justify-between leading-none h-60 lg:h-92">
    <h2 class="text-2xl lg:text-4xl !mb-0">{{ $place->name }}</h2>
  </x-layout.inner>
</header>
<x-layout.inner class="!px-0">
  <div class="grid grid-cols-12">
    <div class="order-2 lg:order-1 col-span-12 lg:col-span-6 {{ $place->locations->count() > 4 ? 'lg:max-h-screen' : 'lg:max-h-[calc(100vh_-_206px)]' }} lg:overflow-y-auto lg:overflow-x-hidden" data-simplebar>
      @foreach ($place->locations as $location)
        <x-accordion.wrapper :location="$location" />
      @endforeach
    </div>
    <div class="min-h-[275px] aspect-square lg:aspect-auto {{ $place->locations->count() > 4 ? 'lg:min-h-screen' : 'lg:min-h-[calc(100vh_-_206px)]' }} order-1 lg:order-2 col-span-12 lg:col-span-6 flex flex-col gap-12 justify-start items-start"
        id="map" 
        data-map-zoom="12"
        data-map-locations='[
        @foreach ($place->locations as $location)
          { "coordinates": [{{ $location->longitude }}, {{ $location->latitude }}], "title": "{{ $location->title }}", "slug": "{{ $location->slug }}"}
          {{ !$loop->last ? ',' : '' }}
        @endforeach
        ]'>
      </div>
  </div>
</x-layout.inner>
