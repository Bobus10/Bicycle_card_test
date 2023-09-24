<div>
    <p>Pytanie: {{ $loop }} z {{ $queCount }}</p>
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
</div>
