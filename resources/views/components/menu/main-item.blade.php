@php 
use App\Models\Place; 
@endphp
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
    {{ $attributes->merge(['class' => 'hover:text-coral transition-colors text-4xl lg:text-5xl']) }}>
    {{ __($title) }}
  </a>
  @if ($href === 'page.places')
    <ul 
      class="mt-16 lg:my-12 ml-2 lg:ml-4 flex flex-col gap-y-4 lg:gap-y-0"
      x-cloak 
      x-show="is_pages">
      @foreach (Place::published()->orderBy('position')->get() as $place)
        <li>
          <a 
            href="{{ localized_route('page.place', $place->slug) }}" 
            title="{{ __($place->name) }}"
            class="block hover:text-coral transition-colors text-lg lg:text-4xl">
            {{ __($place->name) }}
          </a>
        </li>
      @endforeach
    </ul>
  @endif
</li>