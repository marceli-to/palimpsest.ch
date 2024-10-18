<footer class="border-t-2 border-t-white text-white text-sm lg:text-lg leading-[1.125] lg:leading-[1.2] pt-24 pb-16 lg:py-32">
  <x-layout.inner>
    <address class="not-italic">
      Cie Nicole Seiler<br>Rue du Valentin 34 et demi<br>CH–1004 Lausanne
    </address>
    <div class="flex justify-between mt-16">
      <div>
        <a 
          href="mailto:info@nicole-seiler.ch"
          title="{{ __('E-Mail Nicole Seiler') }}"
          class="block hover:text-coral transition-colors"
          target="_blank">
          info@nicole-seiler.ch
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