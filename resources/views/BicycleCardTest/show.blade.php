<p>{{ $question->question }}</p>
    <ul>
        @foreach ($question->answers as $answer)
            <label>
                <input type="radio" id="{{ $answer->id }}" name="answer" value="{{ $answer->isCorrect }}"/>
                {{ $answer->answer}}
            </label><br>
        @endforeach
    </ul>
