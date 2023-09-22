<x-app-layout>
{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<div class="grid grid-cols-1 gap-1 justify-center items-center px-5 py-3 border border-black container mx-auto">
    {{-- Header --}}
    <div class="text-center">
        <p class="text-2xl">Test na kartę rowerową</p>
    </div>
    {{-- Timer --}}
    <div class="py-1">
        <p>Czas:
            <span id="timer">00:00:00</span>
        </p>
    </div>
    {{-- Navigation between questions --}}
    <div class="border border-slate-300 bg-slate-200">
        @for ($i = 1; $i <= $queCount; $i++)
            <button type="button" class="queNavBtn hover:bg-slate-500 border border-slate-300 px-1 mx-1 my-1" onclick="navQue({{ $i - 1 }})"> {{ $i }}</button>
        @endfor
    </div>
    <form action="{{ route('test.store') }}" method="POST">
        @csrf
        {{-- Questions --}}
        <div class="py-1">
            @foreach ($questions as $question)
            <div class="que" style="display: none;">
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
                    <li>
                        <label for="answer_{{ $answer->id }}">
                            <input type="radio" id="answer_{{ $answer->id }}" name="selectedAnswers[{{ $question->id }}]" value="{{ $answer->id }}"/>
                            {{ $answer->answer}}
                            {{--* Correct answer --}}
                            - {{ $answer->isCorrect }}
                        </label>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        {{-- Buttons --}}
        <div class="grid sm:grid-cols-3 sm:start-3 gap-4 py-3">
            <button id="prevBtn" type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4' onclick="showQuestion('prev')">Poprzednie</button>
            <button id="endBtn" type="submit" class='rounded-full bg-red-100 hover:bg-red-500 py-2 px-4'>Zakończ</button>
            <button id="nextBtn" type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4' onclick="showQuestion('next')">Następne</button>
        </div>
    </form>
</div>
@vite(['resources/js/test.js'])
{{-- @endsection --}}
</x-app-layout>
