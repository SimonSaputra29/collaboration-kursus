<?php

namespace Database\Seeders;

use App\Models\Backend\Superiority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSuperioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Superiority::create([
            'title' => 'Beberapa Keunggulan Kami',
            'description' => 'Saatnya bijak memilih sumber belajar! Dengan materi berkualitas tinggi dan reviewer profesional, Kurmin Academy siap membantu Anda dengan umpan balik yang membangun, memastikan setiap kode yang Anda tulis mencapai kesempurnaan.',
        ]);
    }
}
