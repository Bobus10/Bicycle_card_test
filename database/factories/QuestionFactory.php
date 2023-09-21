<?php

namespace Database\Factories;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' =>fake()->text(150)
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Question $question) {
            //set one answer on true
            $correctAnswer = $question->answers->random();
            $correctAnswer->update(['isCorrect' => true]);

            // else answers set on false
            $question->answers->where('id', '!=', $correctAnswer->id)->each(function ($answer) {
                $answer->update(['isCorrect' => false]);
            });
        });
    }
}
