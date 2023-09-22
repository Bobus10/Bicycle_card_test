<label for="answer_{{ $answer->id }}" >
    <input type="radio" id="answer_{{ $answer->id }}" name="selectedAnswers[{{ $questionId }}]" value="{{ $answer->id }}" @if ($isSelected) checked @endif disabled />
    {{ $answer->answer }} - {{ $answer->isCorrect }}
</label>
