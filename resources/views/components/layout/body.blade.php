<body class="bg-royal antialiased font-medium text-sm lg:text-lg leading-[1.125] lg:leading-[1.2] mx-auto flex flex-col min-h-dvh lg:min-h-screen">
  {{-- <x-misc.debug /> --}}
  {{ $slot }}
@vite('resources/js/app.js')
@if (Request::routeIs('*page.place'))
  @vite('resources/css/map.css')
  @vite('resources/js/place.js')
@endif
</body>
</html>
<!-- made with ❤ by bivgrafik.ch & marceli.to -->
