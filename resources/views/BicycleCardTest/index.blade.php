<x-app-layout>
{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<div class="grid grid-cols-1 gap-1 justify-center items-center px-5 py-3 border border-black container mx-auto">
    {{-- Header --}}
    <x-test-header/>
    {{-- Timer --}}
    <form action="{{ route('test.store') }}" method="POST" id="timeEnd">
        @csrf
        <div class="py-1">
            <p>Time:
                <input type="hidden" name="remainingTime" value="">
                <span id="timer" data-starting-time={{ $startingTime }}>
                    00:00:00
                </span>
            </p>
        </div>
        {{-- Navigation between questions --}}
        <div class="border border-slate-300 bg-slate-200">
            @for ($i = 1; $i <= $queCount; $i++)
                <button type="button" class="queNavBtn hover:bg-slate-500 border border-slate-300 px-1 mx-1 my-1" onclick="navQue({{ $i - 1 }})"> {{ $i }}</button>
            @endfor
        </div>
        {{-- Questions --}}
        <div class="py-1">
            @foreach ($questions as $question)
            <div class="que" style="display: none;">
                <x-question :question="$question" :queCount="$queCount" :loop="$loop->iteration"/>
                {{-- Answers --}}
                <ul class="py-2 list-none border border-x-slate-300 sm:px-2">
                    @foreach ($question->answers as $answer)
                        <x-answer :question="$question" :answer="$answer"/>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
        {{-- Buttons --}}
        <div class="grid sm:grid-cols-3 sm:start-3 gap-4 py-3">
            <x-buttons.nav-button id="prevBtn" onClick="showQuestion('prev')" label="Previous"/>
            <x-buttons.end-button id="endBtn"/>
            <x-buttons.nav-button id="nextBtn" onClick="showQuestion('next')" label="Next"/>
        </div>
    </form>
</div>
@vite(['resources/js/test.js', 'resources/js/timer.js'])
{{-- @endsection --}}
</x-app-layout>
