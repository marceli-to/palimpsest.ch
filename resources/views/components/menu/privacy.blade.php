<nav>
  <ul>
    <li class="sm:text-right">
      <a 
        href="{{ localized_route('page.imprint') }}"
        title="{{ __('Impressum') }}"
        class="hover:text-coral transition-colors">
        {{ __('Impressum') }}
      </a>
    </li>
    <li class="sm:text-right">
      <a 
        href="{{ localized_route('page.privacy') }}"
        title="{{ __('Datenschutz') }}"
        class="hover:text-coral transition-colors">
        {{ __('Datenschutz') }}
      </a>
    </li>
  </ul>
</nav>