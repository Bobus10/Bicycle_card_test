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
                'answer' => 'sygnały świetlne, polecenia i sygnały dawane przez osobę kierującą ruchem, znaki drogowe, normy zawarte w przepisach (zasady ruchu drogowego)',
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
            //3
            [
                'question_id' => 3,
                'answer' => 'światło świecące barwy białej umieszczone z przodu, światło od- blaskowe barwy czerwonej umieszczone z tyłu, co najmniej jeden sprawny hamulec, dzwonek',
                'isCorrect' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'z przodu co najmniej jedno światlo pozycyjne barwy białej lub żółtej selektywnej, z tyłu co najmniej jedno światło odblaskowe barwy czerwonej o kształcie innym niż trójkąt, co najmniej jeden skutecznie działający hamulec, w dzwonek',
                'isCorrect' => false,
            ],
            [
                'question_id' => 3,
                'answer' => 'z przodu co najmniej jedno światlo pozycyjne barwy białej lub 201- tej selektywnej, z tylu co najmniej jedno światlo odblaskowe barwy czerwonej o ksztalcie innym niż trójkąt oraz co najmniej w jedno Swiatlo pozycyjne barwy czerwonej, co najmniej jeden skutecznie dzialający hamulec, w dzwonek o nieprzerażliwym dźwięku',
                'isCorrect' => true,
            ],
            //4
            [
                'question_id' => 4,
                'answer' => 'wolno, tylko ciężarowych',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answer' => 'wolno, takich które poruszają się z prędkością nie przekraczającą  50 km/godz.',
                'isCorrect' => false,
            ],
            [
                'question_id' => 4,
                'answer' => 'nie wolno w żadnym wypadku',
                'isCorrect' => true,
            ],
        ];

        Answer::insert($data);
    }
}
