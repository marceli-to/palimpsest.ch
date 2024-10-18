@props(['href', 'title' => null])
<li>
  <a 
    href="{{ localized_route($href) }}"
    title="{{ __($title) }}"
    {{ $attributes->merge(['class' => 'text-4xl']) }}>
    {{ __($title) }}
  </a>
</li>