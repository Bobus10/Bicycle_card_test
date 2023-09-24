<li>
    <label for="answer_{{ $answer->id }}">
        <input type="radio" id="answer_{{ $answer->id }}" name="selectedAnswers[{{ $question->id }}]" value="{{ $answer->id }}"/>
        {{ $answer->answer}}
        {{--* Correct answer --}}
        - {{ $answer->isCorrect }}
    </label>
</li>
