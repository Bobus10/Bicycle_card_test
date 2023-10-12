<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Answer;
use App\Models\Question;
use Database\Factories\QuestionFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     QuestionSeeder::class,
        //     AnswerSeeder::class,
        // ]);

        Question::factory(40)
            ->has(Answer::factory(3))
            ->create();

        $this->call([
            SubjectSeeder::class,
        ]);
    }
}
