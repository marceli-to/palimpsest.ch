<a 
  href="javascript:;" 
  x-on:click="show_menu = ! show_menu; {{ !Request::routeIs('*.page.place') ? 'is_pages = false' : '' }}; $event.target.closest('html').classList.toggle('has_menu');" 
  title="Menü anzeigen"
  class="absolute left-16 top-17 lg:left-0 lg:top-34 lg:relative flex justify-center w-32 lg:w-46">
  <span x-show="show_menu === false">
    <x-icons.burger class="w-32 lg:w-46 h-auto mt-2" />
  </span>
  <span x-cloak x-show="show_menu === true">
    <x-icons.cross class="w-26 lg:w-40 h-auto" />
  </span>
</a>

<div 
  class="bg-royal fixed left-0 top-78 lg:top-114 px-16 lg:px-30 pb-16 lg:pb-0 flex flex-col justify-between h-dvh lg:h-screen w-full max-h-[calc(100dvh_-_78px)] lg:max-h-[calc(100dvh_-_114px)] overflow-y-auto"
  x-cloak 
  x-show="show_menu">
  <nav class="w-full py-18 lg:py-48  max-w-page mx-auto ">
    <ul class="flex flex-col gap-y-16 lg:gap-y-8">
      <x-menu.main-item href="page.about" title="A propos" />
      <x-menu.main-item href="page.places" title="Orte" />
      <x-menu.main-item href="page.image-gallery" title="Bildgalerie" />
    </ul> 
  </nav>
  <x-menu.language class="lg:hidden" />
</div>

