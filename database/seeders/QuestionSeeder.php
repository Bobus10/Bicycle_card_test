<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['question' => 'Kierujący rowerem musi stosować się do znaków i sygnałów w następującej kolejności:'],
            ['question' => 'Jakiego kształtu i koloru są znaki ostrzegawcze?'],
            ['question' => 'Do obowiązkowego wyposażenia roweru należy:'],
            ['question' => 'Czepiać się pojazdów:'],
        ];

        Question::insert($data);
    }
}
