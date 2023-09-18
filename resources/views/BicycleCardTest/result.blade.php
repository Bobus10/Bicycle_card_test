<x-app-layout>
<div>Wynik: {{ $points }}pkt = {{ $percentageGained }}% </div>
<div>
@if ($isPassed)
    <div>Gratulacje zdałeś</div>
@else
    <div>Nie zdałeś, spróbuj jeszcze raz</div>
@endif
</div>
</x-app-layout>
