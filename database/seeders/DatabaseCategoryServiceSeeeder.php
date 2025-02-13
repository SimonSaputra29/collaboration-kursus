<?php

namespace Database\Seeders;

use App\Models\Backend\CategoryService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseCategoryServiceSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryService::create([
            'title' => 'Web Development',
            'overview' => 'Belajar membuat website dengan HTML dan CSS dari dasar hingga mahir.',
        ]);

        CategoryService::create([
            'title' => 'UI/UX DESIGN',
            'overview' => 'Pelajari dasar-dasar desain UI/UX dan tingkatkan keterampilan Anda dengan kursus komprehensif kami.',
        ]);

        CategoryService::create([
            'title' => 'Machine Learning',
            'overview' => 'Pelajari dasar-dasar Machine Learning dan tingkatkan keterampilan Anda dengan kursus komprehensif kami.',
        ]);

        CategoryService::create([
            'title' => 'Data Science',
            'overview' => 'Pelajari dasar-dasar Data Science dan tingkatkan keterampilan Anda dengan kursus komprehensif kami.',
        ]);

        CategoryService::create([
            'title' => 'Cyber Security',
            'overview' => 'Pelajari teknik untuk melindungi sistem dan jaringan dari serangan cyber.',
        ]);

        CategoryService::create([
            'title' => 'Mobile Development',
            'overview' => 'Pelajari cara membuat aplikasi mobile untuk Android dan IOS.',
        ]);
    }
}
