@extends('app')
@section('content')
<x-misc.place>
  <h2>Zürich</h2>
  <div 
    class="grid grid-cols-12 gap-24 mt-24"
    x-data="{ selected: null }">
    <div class="col-span-12 md:col-span-6">
      <div 
        data-index="dampfzentrale" 
        class="accordion relative border-b border-coral">

        <button type="button" class="bg-white text-coral w-full py-10 text-left" @click="selected = selected === 'dampfzentrale' ? null : 'dampfzentrale'">
          <div class="flex items-center justify-between">
            <div>Dampfzentrale</div>
              <svg 
                width="40" 
                height="40" 
                viewBox="0 0 40 40" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
                class="transform transition-transform duration-300 ease-in-out w-24 h-24" :class="{'-rotate-45': selected === 'dampfzentrale'}">
                <path d="M0 20H40" stroke="#EF6344" stroke-width="4"/>
                <path d="M20 0L20 40" stroke="#EF6344" stroke-width="4"/>
              </svg>
          </div>
        </button>

        <div 
          x-ref="containerDampfzentrale" 
          x-bind:style="selected === 'dampfzentrale' ? 'max-height: ' + $refs.containerDampfzentrale.scrollHeight + 'px; opacity: 1' : 'max-height: 0px; opacity: 0'"
          x-bind:class="{ 'is-active': selected === 'dampfzentrale' }"
          class="accordion-transition relative overflow-hidden opacity-0"
          style="max-height: 0px;"
          x-cloak>
          <div class="px-10 py-16">
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
            </div>
          </div>
        </div>

      </div>
      <div 
        data-index="tanzhaus" 
        class="accordion relative border-b border-coral">

        <button type="button" class="bg-white text-coral w-full py-10 text-left" @click="selected = selected === 'tanzhaus' ? null : 'tanzhaus'">
          <div class="flex items-center justify-between">
            <div>Tanzhaus</div>
              <svg 
                width="40" 
                height="40" 
                viewBox="0 0 40 40" 
                fill="none" 
                xmlns="http://www.w3.org/2000/svg"
                class="transform transition-transform duration-300 ease-in-out w-24 h-24" :class="{'-rotate-45': selected === 'tanzhaus'}">
                <path d="M0 20H40" stroke="#EF6344" stroke-width="4"/>
                <path d="M20 0L20 40" stroke="#EF6344" stroke-width="4"/>
              </svg>
          </div>
        </button>

        <div 
          x-ref="containerTanzhaus" 
          x-bind:style="selected === 'tanzhaus' ? 'max-height: ' + $refs.containerTanzhaus.scrollHeight + 'px; opacity: 1' : 'max-height: 0px; opacity: 0'"
          x-bind:class="{ 'is-active': selected === 'tanzhaus' }"
          class="accordion-transition relative overflow-hidden opacity-0"
          style="max-height: 0px;"
          x-cloak>
          <div class="px-10 py-16">
            <div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <div class="col-span-12 md:col-span-6 flex flex-col gap-12 justify-start items-start">
      <button @click="selected = selected === 'dampfzentrale' ? null : 'dampfzentrale'">Dampfzentrale</button>
      <button @click="selected = selected === 'tanzhaus' ? null : 'tanzhaus'">Tanzhaus</button>
    </div>
  </div>
</x-misc.place>
@endsection