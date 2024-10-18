@extends('app')
@section('content')
    <img 
      src="{{ asset('img/palimpsest_home_de-tall.webp') }}" 
      alt="Palimpsest" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall:block square:hidden wide:hidden">

    <img 
      src="{{ asset('img/palimpsest_home_de-tall-md.webp') }}" 
      alt="Palimpsest" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden tall-md:block tall:hidden square:hidden wide:hidden">

    <img 
      src="{{ asset('img/palimpsest_home_de-square.webp') }}" 
      alt="Palimpsest" 
      class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden square:block tall:hidden wide:hidden">

      <img 
        src="{{ asset('img/palimpsest_home_de-wide.webp') }}" 
        alt="Palimpsest" 
        class="w-full h-[calc(100dvh_-_78px)] lg:h-[calc(100dvh_-_114px)] object-cover object-right-top hidden wide:block tall:hidden square:hidden">

@endsection