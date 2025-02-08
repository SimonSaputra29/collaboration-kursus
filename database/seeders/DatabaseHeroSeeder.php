<?php

namespace Database\Seeders;

use App\Models\Backend\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseHeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'title' => 'Bangun Karirmu Sebagai Developer Profesional',
            'description' => 'Mulai belajar terarah dengan learning path',
            'image' => 'uploads/heros/hero.png',
        ]);
    }
}
