<?php

namespace Database\Seeders;

use App\Models\Backend\OurProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseOurProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'title' => 'Belajar Coding',
                'overview' => 'Pelajari dasar-dasar coding dengan berbagai bahasa pemrograman seperti Python, JavaScript, dan PHP.',
                'image' => 'uploads/program1.jpg',
                'link' => 'http://127.0.0.1:8000/',
            ],
            [
                'title' => 'Web Development',
                'overview' => 'Kuasai teknologi frontend dan backend untuk membangun website yang profesional.',
                'image' => 'uploads/program2.jpg',
                'link' => 'http://127.0.0.1:8000/',
            ],
            [
                'title' => 'Mobile Development',
                'overview' => 'Pelajari cara membuat aplikasi Android dan iOS dengan Flutter dan React Native.',
                'image' => 'uploads/program3.jpg',
                'link' => 'http://127.0.0.1:8000/',
            ]
        ];

        OurProgram::insert($programs);
    }
}
