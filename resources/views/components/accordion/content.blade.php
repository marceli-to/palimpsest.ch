@props(['location'])
<div 
  x-ref="container{{ $location->slug }}" 
  x-bind:style="selected === '{{ $location->slug }}' ? 'max-height: ' + $refs.container{{ $location->slug }}.scrollHeight + 'px; opacity: 1' : 'max-height: 0px; opacity: 0'"
  x-bind:class="{ 'is-active': selected === '{{ $location->slug }}' }"
  class="accordion-transition relative overflow-hidden opacity-0"
  style="max-height: 0px;"
  x-cloak>
  <div class="py-10">
    <div>
      <p>{{ $location->subtitle }}</p>
      @if ($location->facts->count() > 0)
        <table>
          <tbody>
            @foreach ($location->facts as $fact)
              <tr>
                <td>{{ $fact->periode }}</td>
                <td>{{ $fact->text }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
</div>