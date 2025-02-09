<?php

namespace Database\Seeders;

use App\Models\Backend\WhyUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseWhyUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WhyUs::insert([
            [
                'title' => 'Sertifikat Resmi',
                'description' => 'Dapatkan sertifikat resmi yang diakui industri setelah menyelesaikan kursus.',
                'image' => '',
            ],
            [
                'title' => 'Mentor Berpengalaman',
                'description' => 'Belajar langsung dari para mentor yang telah sukses di industri teknologi.',
                'image' => '',
            ],
            [
                'title' => 'Komunitas Aktif',
                'description' => 'Terhubung dengan komunitas belajar yang mendukung perkembangan karier Anda.',
                'image' => '',
            ],
        ]);

    }
}
