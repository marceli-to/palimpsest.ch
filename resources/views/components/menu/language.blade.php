<nav {{ $attributes->merge(['class' => '']) }}>
  <a 
    href="{{ Request::routeIs('page.home') ? '/' : current_route('de') }}"
    class="{{ app()->getLocale() === 'de' ? 'underline' : '' }}">DE</a>
  <a 
    href="{{ Request::routeIs('page.home') ? '/fr' : current_route('fr') }}"
    class="{{ app()->getLocale() === 'fr' ? 'underline' : '' }}">FR</a>
  <a 
    href="{{ Request::routeIs('page.home') ? '/en' : current_route('en') }}"
    class="{{ app()->getLocale() === 'en' ? 'underline' : '' }}">EN</a>
</nav>