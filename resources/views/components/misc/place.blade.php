<section class="px-16 lg:px-32">
  <a href="javascript:;" x-on:click="show_menu = true; {{ !Request::routeIs('*.page.place') ? 'is_pages = false' : '' }}; $event.target.closest('html').classList.toggle('has_menu')" class="text-4xl">X</a>
  {{ $slot }}
</section>