<nav {{ $attributes->merge(['class' => '']) }}>
  <ul class="flex gap-x-24 lg:gap-x-20 [&_a]:text-lg [&_a.is-active]:underline [&_a]:decoration-1 [&_a]:underline-offset-2">
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/' : current_route('fr') }}"
        class="{{ app()->getLocale() === 'fr' ? 'is-active' : 'hover:underline' }}">fr</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/de' : current_route('de') }}"
        class="{{ app()->getLocale() === 'de' ? 'is-active' : 'hover:underline' }}">de</a>
    </li>
    <li>
      <a 
        href="{{ Request::routeIs('page.home') ? '/en' : current_route('en') }}"
        class="{{ app()->getLocale() === 'en' ? 'is-active' : 'hover:underline' }}">en</a>
    </li>
  </ul>
</nav>