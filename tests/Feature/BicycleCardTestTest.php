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
    public function test_load_test_page(): void
    {
        $response = $this->get('/bicycle_card_test');

        $response->assertStatus(200);
    }
}
