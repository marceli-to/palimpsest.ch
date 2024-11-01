<nav {{ $attributes->merge(['class' => '']) }}>
  <ul class="flex gap-x-24 lg:gap-x-20 [&_a]:text-lg [&_a.is-active]:text-coral">
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/' : current_route('fr') }}"
        class="{{ app()->getLocale() === 'fr' ? 'is-active' : 'hover:text-coral transition-colors' }}">fr</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/de' : current_route('de') }}"
        class="{{ app()->getLocale() === 'de' ? 'is-active' : 'hover:text-coral transition-colors' }}">de</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/en' : current_route('en') }}"
        class="{{ app()->getLocale() === 'en' ? 'is-active' : 'hover:text-coral transition-colors' }}">en</a>
    </li>
  </ul>
</nav>