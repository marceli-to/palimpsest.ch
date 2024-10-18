<nav {{ $attributes->merge(['class' => '']) }}>
  <ul class="flex gap-x-24 [&_a.is-active]:underline [&_a.is-active]:decoration-1 [&_a.is-active]:underline-offset-2">
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/' : current_route('fr') }}"
        class="{{ app()->getLocale() === 'fr' ? 'is-active' : '' }}">fr</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/de' : current_route('de') }}"
        class="{{ app()->getLocale() === 'de' ? 'is-active' : '' }}">de</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/en' : current_route('en') }}"
        class="{{ app()->getLocale() === 'en' ? 'is-active' : '' }}">en</a>
    </li>
  </ul>
</nav>