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
            [
                'question' => 'Kierujący rowerem musi stosować się do znaków i sygnałów w następującej kolejności:',
                'image_path' => null,
                'image_name' => 'aha.png'
            ],
            [
                'question' => 'Jakiego kształtu i koloru są znaki ostrzegawcze?',
                'image_name' => null,
                'image_path' => 'https://fwcdn.pl/fpo/06/60/660/8021891.6.jpg'
            ],
            ['question' => 'Do obowiązkowego wyposażenia roweru należy:',
            'image_name' => null,
            'image_path' => null,],
            ['question' => 'Czepiać się pojazdów:',
            'image_name' => null,
            'image_path' => null,],
        ];

        Question::insert($data);
    }
}
