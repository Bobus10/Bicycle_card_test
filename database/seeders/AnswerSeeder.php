<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            //1
            [
                'question_id' => 1,
                'answer' => 'sygnały świetlne, polecenia i sygnały dawane przez osobę kieru- jącą ruchem, znaki drogowe, normy zawarte w przepisach (za- sady ruchu drogowego)',
                'isCorrect' => false,
            ],
            [
                'question_id' => 1,
                'answer' => 'polecenia i sygnały dawane przez osobę kierującą ruchem, znaki drogowe, sygnały świetlne, normy zawarte w przepisach (zasady ruchu drogowego)',
                'isCorrect' => false,
            ],
            [
                'question_id' => 1,
                'answer' => 'polecenia i sygnały dawane przez osobę kierującą ruchem, sygnaly świetlne, znaki drogowe, normy zawarte w przepisach (zasady ruchu drogowego)',
                'isCorrect' => true,
            ],
            //2
            [
                'question_id' => 2,
                'answer' => 'czerwono-białe i kwadratowe',
                'isCorrect' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'żółto-czerwone i okrągłe',
                'isCorrect' => false,
            ],
            [
                'question_id' => 2,
                'answer' => 'żółto-czerwone i trójkątne',
                'isCorrect' => true,
            ],
        ];

        Answer::insert($data);
    }
}
