<a 
  href="javascript:;" 
  x-on:click="show_menu = ! show_menu" 
  title="Menü anzeigen"
  :class="{ 'is-active': show_menu === true }"
  class="fixed left-16 top-16 flex justify-center w-32">
  <span x-show="show_menu === false">
    <x-icons.burger class="w-32 h-auto mt-2" />
  </span>
  <span x-cloak x-show="show_menu === true">
    <x-icons.cross class="w-26 h-auto" />
  </span>
</a>

<div 
  class="bg-royal fixed left-0 top-76 h-dvh lg:h-screen w-full"
  x-cloak 
  x-show="show_menu"
  x-transition:enter="transition ease-out duration-240"
  x-transition:enter-start="opacity-0"
  x-transition:enter-end="opacity-100"
  x-transition:leave="transition ease-in duration-240"
  x-transition:leave-start="opacity-100"
  x-transition:leave-end="opacity-0">
  <nav class="flex flex-col p-16">
    <ul class="flex flex-col gap-16">
      <x-menu.main-item href="page.about" title="A propos" />
      <x-menu.main-item href="page.places" title="Orte" />
      <x-menu.main-item href="page.image-gallery" title="Bildgalerie" />
    </ul> 
  </nav>
  <x-menu.language class="fixed bottom-16 left-16 lg:hidden" />
</div>

