<footer class="border-t lg:border-t-2 border-t-red-500 text-white text-sm lg:text-lg pt-24 pb-16 lg:py-32">
  <x-layout.inner>
    <address class="not-italic">
      Cie Nicole Seiler<br>Rue du Valentin 34 et demi<br>CH–1004 Lausanne
    </address>
    <div class="flex flex-col gap-y-16 sm:flex-row sm:justify-between mt-16">
      <div>
        <a 
          href="mailto:info@nicoleseiler.com"
          title="{{ __('E-Mail Nicole Seiler') }}"
          class="block hover:text-coral transition-colors"
          target="_blank">
          info@nicoleseiler.com
        </a>
        <a 
          href="https://www.nicoleseiler.com" 
          title="{{ __('Website Nicole Seiler') }}"
          class="block hover:text-coral transition-colors"
          target="_blank">
          www.nicoleseiler.com
        </a>
      </div>
      <x-menu.privacy />
    </div>
  </x-layout.inner>
</footer>