<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\BicycleCardTest;
use App\Models\Question;
use Illuminate\Http\Request;

class BicycleCardTestController extends Controller
{
    const PERCENTAGE_TO_PASS = 60;
    public $questions, $queCount;

    public function __construct()
    {
        $this->questions = Question::all();
        $this->queCount = count($this->questions);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $startingTime = 600;

        return view('BicycleCardTest.index', [
            'questions' => $this->questions,
            'queCount' => $this->queCount,
            'startingTime' =>  $startingTime,
        ]);
    }

    public function sumPoints($selectedAnswers)
    {
        $points = 0;

        if($selectedAnswers){
            foreach($selectedAnswers as $selectedAnswerId) {
                $selectedAnswer = Answer::find($selectedAnswerId);
                if ($selectedAnswer && $selectedAnswer->isCorrect) {
                    $points++;
                }
            }
        }

        return $points;
    }

    public function percentageGained()
    {
        $points = session('points');
        $queCount = $this->queCount;
        $percentageGained = ($points/$queCount)*100;

        return $percentageGained;
    }

    public function isPassed()
    {
        if($this->percentageGained() >= self::PERCENTAGE_TO_PASS)
            return true;
        else
            return false;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $selectedAnswers = $request->input('selectedAnswers');
        if(!$selectedAnswers){
            $selectedAnswers = [];
        }
        session(['selectedAnswers' => $selectedAnswers]);

        $points = $this->sumPoints($selectedAnswers);
        session(['points' => $points]);

        return redirect()->route('test.showResult');
    }

    public function showAnswers()
    {
        $selectedAnswers = session('selectedAnswers');
        $points = session('points');

        return view('BicycleCardTest.showAnswers', [
            'questions' => $this->questions,
            'queCount' => $this->queCount,
            'points' => $points,
            'percentageGained' => $this->percentageGained(),
            'selectedAnswers'=> $selectedAnswers,
        ]);
    }

    public function showResult()
    {
        $points = session('points');

        return view('BicycleCardTest.result', [
            'points' => $points,
            'queCount' => $this->queCount,
            'isPassed' => $this->isPassed(),
            'percentageGained' => $this->percentageGained(),
        ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(BicycleCardTest $bicycleCardTest)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, BicycleCardTest $bicycleCardTest)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(BicycleCardTest $bicycleCardTest)
    // {
    //     //
    // }
}
