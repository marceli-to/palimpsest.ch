@extends('app')
@section('page_title', __('Impressum'))
@section('content')
<x-layout.inner class="text-royal py-16 lg:py-32">
  <h1 class="text-lg lg:text-4xl mb-4 lg:mb-10">{{ __('Impressum') }}</h1> 
  <p>{{ __('© 2024 Nicole Seiler') }}</p>
  <p>{!!__('Cie Nicole Seiler<br>Rue du Valentin 34 et demi<br>CH–1004 Lausanne<br>info@nicoleseiler.com<br>www.nicoleseiler.com') !!}</p>
  <p>{!! __('Credits:<br>Fotografien: Phlippe Weissbrodt, Arya Dil, Nicole Seiler<br>Text: Nicole Seiler<br>Gestaltung: Bivgrafik<br>Programmierung: Marcel Stadelmann') !!}</p>
</x-layout.inner>
@endsection