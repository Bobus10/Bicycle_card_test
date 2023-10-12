<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'subject_name'  => 'Lekcja 1',
                'description' => '',
                'file_path' => 'file_path',
            ],
        ];

        Subject::insert($data);
    }
}
