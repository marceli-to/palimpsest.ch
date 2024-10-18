@extends('app')
@section('content')
  {{-- <div class="phone-landscape:bg-green-500 phone:bg-red-500 tablet:bg-blue-500 tablet-landscape:bg-yellow-500 min-h-200">
  </div> --}}
  <img 
    src="{{ asset('img/palimpsest_home_de-portrait-sm.webp') }}" 
    alt="Palimpsest" 
    class="w-full h-[calc(100dvh_-_78px)] object-cover">
@endsection