<?php

namespace Tests\Unit;

use App\Models\Answer;
use App\Models\Question;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\BicycleCardTestController;

class PointsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_counting_points_empty_array(): void
    {

        $req = (new BicycleCardTestController())->sumPoints([]);

        $this->assertEquals(0, $req);
    }

    public function test_counting_points_one_answer_is_correct(): void
    {
        $que = Question::factory(1)->create([
            'question' => 'TEST que',
        ]);

        $ans = Answer::factory(1)->create([
            'question_id' => $que->id,
            'answer' => 'Lorem ipsum',
            'isCorrect' => true
        ]);
        $points = (new BicycleCardTestController())->sumPoints([$ans->id]);

        $this->assertEquals(1, $points);
    }

    public function test_counting_points_wrong_answer(): void
    {
        $que = Question::make([
            'question' => 'TEST que'
        ]);
        $ans = Answer::make([
            'question_id' => $que->id,
            'answer' => 'Lorem ipsum',
            'isCorrect' => false
        ]);
        $points = (new BicycleCardTestController())->sumPoints([$ans->id]);

        $this->assertEquals(0, $points);
    }
}
