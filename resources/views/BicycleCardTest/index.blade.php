<x-app-layout>
{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<div class="p-3">
    <x-slot name="header">
        <h3>Test na kartę rowerową</h3>
    </x-slot>

    <div>
        @foreach ($questions as $question)
        <div class="border bg-light que" style="display: none;">
            <p>{{ $loop->iteration }}.
                <label for="question_{{ $question->id }}"> {{ $question->question }}</label>
            </p>
            <ul>
                @foreach ($question->answers as $answer)
                <label for="answer_{{ $answer->id }}">
                    <input type="radio" id="answer_{{ $answer->id }}" name="answer_{{ $question->id }}"/>
                    {{ $answer->answer}}
                </label><br>
                @endforeach
            </ul>
        </div>
        @endforeach

    </div>

    <button id="prevBtn" onclick="showQuestion('prev')">Poprzednie</button>
    <button id="nextBtn" onclick="showQuestion('next')">Następne</button>

</div>
@vite(['resources/js/test.js'])
    {{-- @endsection --}}
</x-app-layout>
