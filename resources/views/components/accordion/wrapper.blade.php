@props(['location'])
<div 
  data-location="{{ $location->slug }}" 
  class="relative text-coral border-b lg:border-b-2 border-coral last-of-type:has-[.is-active]:border-none"
  data-accordion>
  <button 
    type="button" 
    class="bg-white w-full text-left py-16 scroll-mt-[78px] lg:scroll-mt-106"
    data-accordion-button>
    <div class="flex items-center justify-between px-16 lg:pl-32 3xl:pl-0 lg:pr-8">
      <div class="3xl:flex 3xl:items-end 3xl:space-x-8">
        <h2 class="text-2xl mb-2 leading-none">{{ $location->title }}</h2>
        <span class="text-sm lg:text-base">{{ $location->subtitle }}</span>
      </div>
      <svg 
        width="40" 
        height="40" 
        viewBox="0 0 40 40" 
        fill="none" 
        xmlns="http://www.w3.org/2000/svg"
        class="transform transition-transform duration-300 ease-in-out shrink-0 w-32 h-32">
        <path d="M0 20H40" stroke="#EF6344" stroke-width="4"/>
        <path d="M20 0L20 40" stroke="#EF6344" stroke-width="4"/>
      </svg>
    </div>
  </button>
  <x-accordion.content :location="$location" />
</div>
