@props(['index'])
<div 
  data-index="{{ $index }}"
  {{ $attributes->merge(['class' => 'relative border-b border-coral mb-12 md:mb-24']) }}>
  {{ $slot }}
</div>