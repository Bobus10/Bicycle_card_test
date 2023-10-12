<x-app-layout>
<div class="grid grid-cols-1 gap-1 justify-center items-center px-5 py-3 border border-black container mx-auto relative">
    {{-- Header --}}
    <div class="text-center sticky top-0 bg-slate-100 z-10">
        <x-test-header/>
        <p class="bold">{{ $points }} z {{ $queCount }}, {{ $percentageGained }}%</p>
    </div>
    {{-- Timer --}}
    <div class="py-1">
        <p>Czas: {{ $solutionTime }}</p>
    </div>
    {{-- Questions --}}
    <div class="py-1">
        @foreach ($questions as $question)
            <div class="que">
                <x-question :question="$question" :queCount="$queCount" :loop="$loop->iteration"/>
                {{-- Answers --}}
                <ul class="py-2 list-none border border-x-slate-300 sm:px-2">
                    @foreach ($question->answers as $answer)
                        @php
                            $isSelected = isset($selectedAnswers[$question->id]) && $selectedAnswers[$question->id] == $answer->id;
                            $isCorrect = $answer->isCorrect;
                        @endphp
                        @if ($isCorrect || ($isSelected && $isCorrect))
                            <li class="bg-green-400">
                                <x-answer-option :answer="$answer" :questionId="$question->id" :isSelected="$isSelected"/>
                            </li>
                        @elseif ($isSelected && !$isCorrect)
                            <li class="bg-red-400">
                                <x-answer-option :answer="$answer" :questionId="$question->id" :isSelected="$isSelected"/>
                            </li>
                        @else
                            <li class="">
                                <x-answer-option :answer="$answer" :questionId="$question->id" :isSelected="$isSelected"/>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
    {{-- Buttons --}}
    <div class="sticky bottom-0 bg-slate-100 z-10 text-center">
        <x-buttons.route-button route="home" label="Main page"/>
        <x-buttons.route-button route="test.showResult" label="Result"/>
    </div>
</div>
</x-app-layout>

