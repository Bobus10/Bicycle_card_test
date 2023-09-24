<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Answer extends Component
{
    public $question, $answer;

    public function __construct($question, $answer)
    {
        $this->question = $question;
        $this->answer = $answer;
    }


    public function render(): View|Closure|string
    {
        return view('components.answer');
    }
}
