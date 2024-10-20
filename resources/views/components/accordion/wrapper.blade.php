@props(['location'])
<div data-index="{{ $location->slug }}" class="accordion relative border-b border-coral">
  <button type="button" class="bg-white text-coral py-5 w-full text-left" @click="selected = selected === '{{ $location->slug }}' ? null : '{{ $location->slug }}'">
    <div class="flex items-center justify-between px-16 lg:px-0">
      <h2>{{ $location->title }}</h2>
      <svg 
        width="40" 
        height="40" 
        viewBox="0 0 40 40" 
        fill="none" 
        xmlns="http://www.w3.org/2000/svg"
        class="transform transition-transform duration-300 ease-in-out w-24 h-24" :class="{'-rotate-45': selected === '{{ $location->slug }}'}">
        <path d="M0 20H40" stroke="#EF6344" stroke-width="4"/>
        <path d="M20 0L20 40" stroke="#EF6344" stroke-width="4"/>
      </svg>
    </div>
  </button>
  <x-accordion.content :location="$location" />
</div>
