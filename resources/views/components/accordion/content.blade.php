@props(['location'])
<div 
  class="relative overflow-hidden opacity-0"
  style="max-height: 0px;"
  data-accordion-content>
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