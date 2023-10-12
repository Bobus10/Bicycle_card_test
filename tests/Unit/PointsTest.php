<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\BicycleCardTestController;

class PointsTest extends TestCase
{
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }

    // public function test_counting_points_empty_array(): void
    // {
    //     $bicycleCardTestController = new BicycleCardTestController();
    //     $checkedAnswers = [];
    //     $points = $bicycleCardTestController->sumPoints($checkedAnswers);

    //     $this->assertEquals(0, $points);
    // }

    // public function test_counting_points_one_answer_is_correct(): void
    // {
    //     $bicycleCardTestController = new BicycleCardTestController();
    //     $checkedAnswers = [
    //         ['isCorrect' => true],
    //         ['isCorrect' => false],
    //     ];
    //     $points = $bicycleCardTestController->sumPoints($checkedAnswers);

    //     $this->assertEquals(1, $points);
    // }

    // public function test_counting_points_wrong_answer(): void
    // {
    //     $que = Question::make([
    //         'question' => 'TEST que'
    //     ]);
    //     $ans = Answer::make([
    //         'question_id' => $que->id,
    //         'answer' => 'Lorem ipsum',
    //         'isCorrect' => false
    //     ]);
    //     $points = (new BicycleCardTestController())->sumPoints([$ans->id]);

    //     $this->assertEquals(0, $points);
    // }
}
