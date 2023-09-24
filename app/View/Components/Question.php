<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Question extends Component
{
    public $question, $queCount, $loop;
    public function __construct($question, $queCount, $loop)
    {
        $this->question = $question;
        $this->queCount = $queCount;
        $this->loop = $loop;
    }

    public function render(): View|Closure|string
    {
        return view('components.question');
    }
}
