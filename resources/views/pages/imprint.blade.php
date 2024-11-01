@extends('app')
@section('page_title', __('Impressum'))
@section('content')
<x-layout.inner class="text-royal py-16 lg:py-32">
  <h1 class="text-lg lg:text-4xl mb-4 lg:mb-10">{{ __('Impressum') }}</h1> 
  <p>{{ __('© 2024 Nicole Seiler') }}</p>
  <p>{!!__('Cie Nicole Seiler<br>Rue du Valentin 34 et demi<br>CH–1004 Lausanne<br><a href="mailto:info@nicoleseiler.com" class="hover:text-coral transition-colors">info@nicoleseiler.com</a><br><a href="https://www.nicoleseiler.com" class="hover:text-coral transition-colors">www.nicoleseiler.com</a>') !!}</p>
  <p>{!! __('Credits:<br>Fotografien: Phlippe Weissbrodt, Arya Dil, Nicole Seiler<br>Text: Nicole Seiler<br>Gestaltung: <a href="https://www.bivgrafik.ch" target="_blank" class="hover:text-coral transition-colors">Bivgrafik</a><br>Programmierung: <a href="https://marceli.to" target="_blank" class="hover:text-coral transition-colors">Marcel Stadelmann</a>') !!}</p>
</x-layout.inner>
@endsection