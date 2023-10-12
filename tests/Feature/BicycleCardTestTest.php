<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\BicycleCardTestController;

class BicycleCardTestTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    // public function test_load_bicycle_card_test_page(): void
    // {
    //     $response = $this->get('/bicycle_card_test');

    //     $response->assertStatus(200);
    // }
    public function test_counting_points_empty_array(): void
    {
        $bicycleCardTestController = new BicycleCardTestController();
        $checkedAnswers = [];
        $points = $bicycleCardTestController->sumPoints($checkedAnswers);

        $this->assertEquals(0, $points);
    }

    public function test_counting_points_one_answer_is_correct(): void
    {
        $bicycleCardTestController = new BicycleCardTestController();
        $checkedAnswers = Answer::factory()->create();
dd($checkedAnswers);
        $points = $bicycleCardTestController->sumPoints($checkedAnswers);

        $this->assertEquals(1, $points);
    }
}
