@extends('app')
@section('content')
    <img 
      src="{{ asset('img/palimpsest_home_'.locale().'-tall.webp') }}" 
      alt="{{ __(env('APP_NAME')) }}" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden square:hidden wide:hidden tall:block">

    <img 
      src="{{ asset('img/palimpsest_home_'.locale().'-tall-md.webp') }}" 
      alt="{{ __(env('APP_NAME')) }}" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall:hidden tall-md:block square:hidden wide:hidden">

    <img 
      src="{{ asset('img/palimpsest_home_'.locale().'-square.webp') }}" 
      alt="{{ __(env('APP_NAME')) }}" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall:hidden wide:hidden square:block">

      <img 
        src="{{ asset('img/palimpsest_home_'.locale().'-wide.webp') }}" 
        alt="{{ __(env('APP_NAME')) }}" 
        class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall:hidden square:hidden wide:block">

@endsection