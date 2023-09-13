<x-app-layout>
    <x-slot name="header">
        <h3>Test na kartę rowerową</h3>
    </x-slot>
    {{-- @extends('layouts.app') --}}
    {{-- @section('content') --}}

    <div>
        @foreach ($questions as $question)
        <p>{{ $question->question }}</p>
        <ul>
            @foreach ($question->answers as $answer)
            <label>
                <input type="radio" id="{{ $answer->id }}" name="answer" value="{{ $answer->isCorrect }}"/>
                {{ $answer->answer}}
            </label><br>
            @endforeach
        </ul>
        @endforeach

        <div class="pagination justify-content-center">
            {{ $questions->links() }}
        </div>
    </div>
    {{-- @endsection --}}

</x-app-layout>
