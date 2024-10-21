@php
$images = [
  [
    'src' => 'palimpsest-nicole-seiler-about-01',
    'caption' => 'Caption',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-about-02',
    'caption' => 'Caption',
    'format' => 'landscape'
  ],
  [
    'src' => 'palimpsest-nicole-seiler-about-03',
    'caption' => 'Caption',
    'format' => 'landscape'
  ],
];
@endphp
@extends('app')
@section('page_title', __('A propos'))
@section('content')
<x-layout.inner class="text-royal py-16 lg:py-32">
  <div class="space-y-24 lg:space-y-0 lg:grid lg:grid-cols-12 lg:gap-x-20">
    <div class="lg:col-span-6">
      <h2>{{ __('Was ist Palimpsest?') }}</h2>
      <p>{{ __('Palimpsest ist Tanz fürs Ohr, eine Sammlung von Hörstücken.') }}</p>    
      <p>{{ __('Palimpsest ist eine choreografische Beschreibung der Geschichte eines Ortes.') }}</p>
      <p>{{ __('Mit Palimpsest entdeckst du die Poesie der Vergangenheit.') }}</p>
      <p>{{ __('Palimpsest erforscht die poetischen Möglichkeiten der Audiodeskription und lädt zu einem Spaziergang ein. Beim Hören der Hörstücken wirst du als Zuhörer*in aktiv, indem du die Bewegung auf eine ephemere Bühne projizierst. Die Performer*innen sind abwesend. In der hyperrealistischen Erzählung subtil hervorgerufen, erscheinen sie hier und da wie Geister in der Umgebung. Die physisch abwesenden Figuren werden so wieder zum Leben erweckt.') }}</p>
      <p>{{ __('Palimpsest wurde im Jahr 2018 uraufgeführt. Ursprünglich funktionierte es in Form einer App mit Geolokalisierung, mit der man die Klangstücke nur vor Ort hören konnte. Heute kann man durch die Website stöbern und das gesamte Repertoire entdecken. Natürlich ist es immer noch möglich, sich direkt an einen Ort zu begeben, um die Hörstücke ganz zu erleben.') }}</p>
      <h2>{{ __('Anleitung') }}</h2>
      <p>{{ __('Wähle einen Standort aus, nimm dein Smartphone und ein Headset mit und gehe zu einem der Punkte auf der Karte. Lass dich führen!') }}</p>
      <h2>{{ __('Sprache') }}</h2>
      <p>{{ __('Die Stücke sind in der Originalsprache ihrer Standorte verfasst.') }}</p>
      <h2>{{ __('Credits') }}</h2>
      <div class="space-y-8 lg:space-y-16">
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Konzept:') }}</div>
          <div>{{ __('Nicole Seiler') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Text:') }}</div>
          <div>{{ __('Séverine Skierski') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Sound und Komposition:') }}</div>
          <div>{{ __('Stéphane Vecchione, Patricia Bosshard, Jérémy Conne, Maxime Steiner') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Stimme:') }}</div>
          <div>{{ __('Séverine Skierski, Martherita Saltamacchia, Cathrin Strömer, Stefanie Mrachacz') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Zusätzliche Choreografien:') }}</div>
          <div>{{ __('Simon Crettol, Maria Demandt, Katrin Kolo, Emma Murray, Marthe Krummenacher, Camilla Parini, Léa Tirabasso') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Grafik:') }}</div>
          <div>{{ __('Bivgrafik') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Administration:') }}</div>
          <div>{{ __('Cie Nicole Seiler : Léonore Friedli') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Touring:') }}</div>
          <div>{{ __('Cie Nicole Seiler : Ana Lagarrigue') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Historiker*innen:') }}</div>
          <div>{{ __('Anne-Gaëlle Neipp, Ariane Devanthéry, Jean-Pierre Pastori, Olivier Robert, Lausanne Jardins, Véronique Rey-Vodoz, Catherine Schmutz') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Produktion:') }}</div>
          <div>{{ __('Cie Nicole Seiler') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Koproduktion:') }}</div>
          <div>{{ __('Théâtre de l\'Arsenic Lausanne (CH), far° Nyon (CH), Lausanne Jardins (CH)') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Unterstützung:') }}</div>
          <div>{{ __('Stadt Lausanne, Kanton Waadt, Pro Helvetia – Schweizerische Kulturstiftung, Loterie Romande, Ernst Göhner Stiftung') }}</div>
        </div>
        <div class="lg:grid lg:grid-cols-about lg:gap-x-10">
          <div>{{ __('Dank an:') }}</div>
          <div>{{ __('Cie Kokodyniack') }}</div>
        </div>
      </div>
    </div>
    <div class="lg:col-span-6 space-y-16 lg:space-y-32">
      @foreach ($images as $image)
        <picture class="block">
          <source srcset="{{ asset('img/'.$image['src'].'-lg.webp') }}" media="(min-width: 1024px)" type="image/webp">
          <source srcset="{{ asset('img/'.$image['src'].'-md.webp') }}" media="(min-width: 768px)" type="image/webp">
          <source srcset="{{ asset('img/'.$image['src'].'-sm.webp') }}" type="image/webp">
          <source srcset="{{ asset('img/'.$image['src'].'-lg.jpg') }}" media="(min-width: 1024px)">
          <source srcset="{{ asset('img/'.$image['src'].'-md.jpg') }}" media="(min-width: 768px)">
          <img 
            src="{{ asset('img/'.$image['src'].'-sm.jpg') }}" 
            alt="{{ $image['caption'] ?? '' }}" 
            class="w-full h-auto"
            width="700"
            height="467"
            loading="lazy">
        </picture>
      @endforeach
    </div>
  </div>
</x-layout.inner>
@endsection
