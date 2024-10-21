@extends('app')
@section('content')
  <picture>
    <source srcset="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-tall.webp') }}" type="image/webp">
    <img 
      src="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-tall.jpg') }}" 
      alt="{{ __(env('APP_NAME')) }}" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden square:hidden wide:hidden tall:block">
  </picture>
  <picture>
    <source srcset="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-tall-md.webp') }}" type="image/webp">
    <img 
      src="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-tall-md.jpg') }}" 
      alt="{{ __(env('APP_NAME')) }}" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall:hidden tall-md:block square:hidden wide:hidden">
  </picture>
  <picture>
    <source srcset="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-square.webp') }}" type="image/webp">
    <img 
      src="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-square.jpg') }}') }}" 
      alt="{{ __(env('APP_NAME')) }}" 
      title="{{ __(env('APP_NAME')) }}" 
      height="2000" 
      width="4000"
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall:hidden wide:hidden square:block">
  </picture>
  <picture>
    <source srcset="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-wide.webp') }}" type="image/webp">
    <img 
      src="{{ asset('img/palimpsest-nicole-seiler-home-'.locale().'-wide.jpg') }}" 
      alt="{{ __(env('APP_NAME')) }}" 
      title="{{ __(env('APP_NAME')) }}" 
      height="2000" 
      width="4000"
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall:hidden square:hidden wide:block">
  </picture>
@endsection