<nav {{ $attributes->merge(['class' => '']) }}>
  <ul class="flex gap-x-24">
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/fr' : current_route('fr') }}"
        class="{{ app()->getLocale() === 'fr' ? 'underline decoration-1 underline-offset-2' : '' }}">fr</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/' : current_route('de') }}"
        class="{{ app()->getLocale() === 'de' ? 'underline' : '' }}">de</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/en' : current_route('en') }}"
        class="{{ app()->getLocale() === 'en' ? 'underline' : '' }}">en</a>
    </li>
  </ul>
</nav>