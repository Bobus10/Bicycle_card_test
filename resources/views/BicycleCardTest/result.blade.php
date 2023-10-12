<x-app-layout>
<div class="grid grid-cols-1 gap-1 text-center items-center justify-center py-2">
    <div class="">
        <p class="text-lg">Test result:</p>
        <p>You answered well to <span class="font-bold">{{ $points }} on {{ $queCount }} questions, {{ $percentageGained }}%</span></p>
        <p>In time: {{ $solutionTime }}</p>
        @if ($isPassed)
            <p class="font-bold">Congratulations, you passed</p>
        @else
            <p class="font-bold">You didn't pass, try again</p>
        @endif
    </div>
    <div>
        <x-buttons.route-button route="test.index" label="New test"/>
        <x-buttons.route-button route="home" label="Main page"/>
        <x-buttons.route-button route="test.showAnswers" label="Show answers"/>
    </div>
</div>
</x-app-layout>
