@php
$images = [
  [
    'src' => 'palimpsest-nicole-seiler-galerie-01',
    'caption' => 'Caption',
    'format' => 'portrait'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-02',
    'caption' => '',
    'format' => 'ultra-wide'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-03',
    'caption' => '',
    'format' => 'landscape'

  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-04',
    'caption' => '',
    'format' => 'portrait'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-05',
    'caption' => '',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-06',
    'caption' => '',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-07',
    'caption' => '',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-08',
    'caption' => '',
    'format' => 'portrait'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-09',
    'caption' => '',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-10',
    'caption' => '',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-11',
    'caption' => '',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-12',
    'caption' => 'Test',
    'format' => 'landscape'
  ]
];
@endphp
@extends('app')
@section('content')
<x-layout.inner class="py-16 lg:py-32">
  @foreach ($images as $image)
    <picture class="block {{ $image['caption'] ? 'mb-16 lg:mb-32' : 'mb-32 lg:mb-56' }} last-of-type:mb-0">
      <source srcset="{{ asset('img/'.$image['src'].'-lg.webp') }}" media="(min-width: 1024px)" type="image/webp">
      <source srcset="{{ asset('img/'.$image['src'].'-md.webp') }}" media="(min-width: 768px)" type="image/webp">
      <source srcset="{{ asset('img/'.$image['src'].'-sm.webp') }}" type="image/webp">
      <source srcset="{{ asset('img/'.$image['src'].'-lg.jpg') }}" media="(min-width: 1024px)">
      <source srcset="{{ asset('img/'.$image['src'].'-md.jpg') }}" media="(min-width: 768px)">
      <img 
        src="{{ asset('img/'.$image['src'].'-sm.jpg') }}" 
        alt="{{ $image['caption'] ?? '' }}" 
        class="w-full h-auto {{ $image['format'] === 'portrait' ? 'sm:max-w-[50%]' : ($image['format'] === 'landscape' ? 'lg:max-w-[75%]' : '') }}"
        loading="lazy">
        @if ($image['caption'])
          <figcaption class="text-royal font-xs lg:font-sm mt-6">
            {{ $image['caption'] }}
          </figcaption>
        @endif
    </picture>
  @endforeach
</x-layout.inner>
@endsection
