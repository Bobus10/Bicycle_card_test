<x-app-layout>
<div class="grid grid-cols-1 gap-1 text-center items-center justify-center py-2">
    <div class="">
        <p class="text-lg">Wyniki testu:</p>
        <p>Odpowiedziałeś dobrze na <span class="font-bold">{{ $points }} z {{ $queCount }} pytań, {{ $percentageGained }}%</span></p>
        <p>W czasie: 00:00:00</p>
        @if ($isPassed)
            <p class="font-bold">Gratulacje zdałeś</p>
        @else
            <p class="font-bold">Nie zdałeś, spróbuj jeszcze raz</p>
        @endif
    </div>
    <div>
        <a href="{{ route('test.index') }}"><button type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4'>Nowy test</button></a>
        <a href="{{ route('test.showAnswers') }}"><button type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4'>Podgląd testu</button></a>
    </div>
</div>
</x-app-layout>
