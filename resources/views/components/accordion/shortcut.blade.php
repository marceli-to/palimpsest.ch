@props(['index', 'title'])
<button 
  x-on:click="selected = {{ $index }}"
  {{ $attributes->merge(['class' => 'bg-royal flex text-white py-12 px-12 leading-none hover:text-serene transition-colors'])}}>
  {{ $title }}
</button>
