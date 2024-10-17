<header class="bg-blue-600 px-20 text-white flex justify-between items-center">
  <nav class="flex flex-col">
    <a href="{{ localized_route('page.about') }}">{{ __('A propos') }}</a>
    <a href="{{ localized_route('page.places') }}">{{ __('Orte') }}</a>
    <a href="{{ localized_route('page.image-gallery') }}">{{ __('Bildgalerie') }}</a>
  </nav>
  <div class="flex flex-col items-center justify-center">
    <h1 class="text-2xl font-bold">Palimpsest</h1>
    <p>Audiowalk – Cie Nicole Seiler</p>
  </div>
  <nav>
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
</header>
