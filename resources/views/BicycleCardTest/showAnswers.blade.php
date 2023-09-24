<x-app-layout>
<div class="grid grid-cols-1 gap-1 justify-center items-center px-5 py-3 border border-black container mx-auto relative">
    {{-- Header --}}
    <div class="text-center sticky top-0 bg-slate-100 z-10">
        <p class="text-2xl">Test na kartę rowerową</p>
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
                    <p>Pytanie: {{ $loop->iteration }} z {{ $queCount }}</p>
                    <div class="my-2 flex justify-center items-center">
                        @if ($question->image_name)
                            <img src="{{ asset('build/assets/'.$question->image_name) }}" alt="Img">
                        @elseif ($question->image_path)
                            <img src="{{ $question->image_path }}" alt="Img">
                        @endif
                    </div>
                    <p>
                        <label for="question_{{ $question->id }}">{{ $question->question }}</label>
                    </p>
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
        <a href="{{ route('home') }}"><button type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4'>Strona startowa</button></a>
        <a href="{{ route('test.showResult') }}"><button type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4'>Podsumowanie</button></a>
    </div>
</div>
</x-app-layout>

