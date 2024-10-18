@props(['href', 'title' => null])
<li>
  <a 
    href="{{ localized_route($href) }}"
    title="{{ __($title) }}"
    {{ $attributes->merge(['class' => 'text-4xl lg:text-5xl']) }}>
    {{ __($title) }}
  </a>
  @if ($href === 'page.places')
    <ul class="my-16 ml-2 flex flex-col gap-y-8 lg:gap-y-4">
      @foreach (config('places') as $slug => $place)
        <li>
          <a 
            href="{{ localized_route('page.place', $slug) }}" 
            title="{{ __($place) }}"
            class="block text-lg lg:text-4xl">
            {{ __($place) }}
          </a>
        </li>
      @endforeach
    </ul>
  @endif
</li>