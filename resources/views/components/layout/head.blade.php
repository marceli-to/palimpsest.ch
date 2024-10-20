<!doctype html>
<html 
  lang="{{ locale() }}" 
  class="scroll-smooth overflow-y-auto" 
  x-data="{ show_menu: false, is_pages: {{ Request::routeIs('*.page.place') ? 'true' : 'false' }} }">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ __(env('APP_NAME')) }}</title>
<meta name="description" content="{{ __(env('APP_DESCRIPTION')) }}">
<meta property="og:title" content="{{ env('APP_NAME') }}">
<meta property="og:description" content="{{ __(env('APP_DESCRIPTION')) }}">
<meta property="og:url" content="{{ url()->current()}}">
<meta property="og:site_name" content="{{ __(env('APP_NAME')) }}">
<meta property="og:image" content="{{ asset('opengraph-'.locale().'.png') }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="{{ __(env('APP_DESCRIPTION')) }}">
<meta name="twitter:title" content="{{ __(env('APP_NAME')) }}">
<meta property="twitter:image" content="{{ asset('opengraph-'.locale().'.png') }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="{{ __(env('APP_NAME')) }}" />
<link rel="manifest" href="/site.webmanifest" />
<link rel="preload" href="/build/assets/AtlasGrotesk-Medium-Web.woff2" as="font" type="font/woff2" crossorigin>
@vite('resources/css/app.css')
@vite('resources/css/map.css')
@vite('resources/js/place.js')
<noscript>
  <style>
    .simplebar-content-wrapper {
      scrollbar-width: auto;
      -ms-overflow-style: auto;
    }
    .simplebar-content-wrapper::-webkit-scrollbar,
    .simplebar-hide-scrollbar::-webkit-scrollbar {
      display: initial;
      width: initial;
      height: initial;
    }
  </style>
</noscript>
</head>

