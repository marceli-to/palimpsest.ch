@php
$images = [
  [
    'src' => 'palimpsest-nicole-seiler-galerie-01',
    'caption' => 'Palimpsest Lausanne, Grand Pont',
    'format' => 'portrait'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-02',
    'caption' => 'Palimpsest Lausanne, Montbenon',
    'format' => 'ultra-wide'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-03',
    'caption' => 'Palimpsest Lausanne, St. François',
    'format' => 'landscape'

  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-04',
    'caption' => 'Palimpsest Lausanne, Promenade Jean Villars GIlles',
    'format' => 'portrait'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-05',
    'caption' => 'Palimpsest Lausanne, Parc de Valency',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-06',
    'caption' => 'Palimpsest Lausanne, Petit parc à la fontaine',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-07',
    'caption' => 'Palimpsest Lausanne Jardins, vernissage with live performance (Séverine Skierski, Stéphane Vecchione)',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-08',
    'caption' => 'Palimpsest Nyon, Rue des Marchandises',
    'format' => 'portrait'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-09',
    'caption' => 'Palimpsest Nyon, vernissage at far° festival',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-10',
    'caption' => 'Making of: Séverine Skierski in the recording studio',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-11',
    'caption' => 'Making of: writing for Palimpsest Lausanne Jardins, Petit parc à la fontaine ',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-galerie-12',
    'caption' => 'Making of: writing for Palimpsest Givrins',
    'format' => 'landscape'
  ]
];
@endphp
@extends('app')
@section('page_title', __('Bildgalerie'))
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
        width="700"
        height="467"
        loading="lazy">
        @if ($image['caption'])
          <figcaption class="text-royal text-xs lg:text-sm mt-6">
            {{ $image['caption'] }}
          </figcaption>
        @endif
    </picture>
  @endforeach
</x-layout.inner>
@endsection
