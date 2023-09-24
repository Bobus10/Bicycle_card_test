<x-app-layout>
<div class="grid grid-cols-1 gap-1 text-center items-center justify-center py-2">
    <div class="">
        <p class="text-lg">Wyniki testu:</p>
        <p>Odpowiedziałeś dobrze na <span class="font-bold">{{ $points }} z {{ $queCount }} pytań, {{ $percentageGained }}%</span></p>
        <p>W czasie: {{ $solutionTime }}</p>
        @if ($isPassed)
            <p class="font-bold">Gratulacje zdałeś</p>
        @else
            <p class="font-bold">Nie zdałeś, spróbuj jeszcze raz</p>
        @endif
    </div>
    <div>
        <x-buttons.route-button route="test.index" label="Nowy test"/>
        <x-buttons.route-button route="home" label="Strona startowa"/>
        <x-buttons.route-button route="test.showAnswers" label="Podgląd testu"/>
    </div>
</div>
</x-app-layout>
