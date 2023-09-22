<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AnswerOption extends Component
{
    public $answer;
    public $questionId;
    public $isSelected;

    public function __construct($answer, $questionId, $isSelected)
    {
        $this->answer = $answer;
        $this->questionId = $questionId;
        $this->isSelected = $isSelected;
    }

    public function render(): View|Closure|string
    {
        return view('components.answer-option');
    }
}
