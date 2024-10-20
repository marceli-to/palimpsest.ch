@props(['slug'])
@php 
use App\Models\Place;
$place = Place::with('locations.facts')->where('slug', $slug)->published()->firstOrFail();
@endphp
<x-layout.inner class="!px-0 lg:!px-32">
  <div class="px-16 lg:px-0">
    <a 
      href="javascript:;" 
      x-on:click="show_menu = true; {{ !Request::routeIs('*.page.place') ? 'is_pages = false' : '' }};" 
      class="text-4xl">
      X
    </a>
    <h2>{{ $place->name }}</h2>
  </div>
  <div class="grid grid-cols-12 gap-24 mt-24" x-data="{ selected: null }">
    <div class="col-span-12 lg:col-span-6 lg:max-h-[calc(100vh-500px)] lg:overflow-y-auto lg:overflow-x-hidden" data-simplebar>
      @foreach ($place->locations as $location)
        <x-accordion.wrapper :location="$location" />
      @endforeach
    </div>
    <div class="col-span-12 lg:col-span-6 flex flex-col gap-12 justify-start items-start">
      @foreach ($place->locations as $location)
        <button @click="selected = selected === '{{ $location->slug }}' ? null : '{{ $location->slug }}'">{{ $location->title }}</button>
      @endforeach
    </div>
  </div>
</x-layout.inner>
