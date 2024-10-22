@props(['location'])
<div 
  class="relative overflow-hidden opacity-0"
  style="max-height: 0px;"
  data-accordion-content>
  <div class="text-sm lg:text-base lg:leading-[1.222]">
    <div class="text-white bg-coral py-16 pl-16 lg:pl-32 3xl:pl-16">
      {{ __('Erlebe das Hörstück') }}
    </div>
    <div>
      @if ($location->facts->count() > 0)
        <table>
          <tbody>
            <tr class="border-y border-coral lg:border-y-2">
              <td colspan="2" class="pl-16 lg:pl-32 3xl:pl-0 py-16">
                {{ __('Die nachfolgenden Facts sind subjektiv ausgewählt und inspirieren/ergänzen das Hörstück.') }}
              </td>
            </tr>
            @foreach ($location->facts as $fact)
              <tr class="border-b border-coral lg:border-b-2 last-of-type:border-b-0">
                <td class="w-full lg:w-180 block mb-10 lg:mb-0 lg:table-cell p-16 pb-0 lg:pb-16 lg:pl-32 3xl:pl-0 lg:pr-24 align-top">{{ $fact->periode }}</td>
                <td class="w-full lg:w-auto block lg:table-cell p-16 pt-0 lg:pt-16 lg:pr-32 align-top">{{ $fact->text }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @endif
    </div>
  </div>
</div>