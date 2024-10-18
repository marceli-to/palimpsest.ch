@props(['href', 'title' => null])
<li>
  <a 
    @if ($href === 'page.places')
      href="javascript:;"
      x-on:click="is_pages = ! is_pages"
    @else
      href="{{ localized_route($href) }}"
    @endif
    title="{{ __($title) }}"
    {{ $attributes->merge(['class' => 'text-4xl lg:text-5xl']) }}>
    {{ __($title) }}
  </a>
  @if ($href === 'page.places')
    <ul 
      class="mt-16 lg:my-12 ml-2 lg:ml-4 flex flex-col gap-y-8 lg:gap-y-4"
      x-cloak 
      x-show="is_pages">
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