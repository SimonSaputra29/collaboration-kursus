<?php

namespace Database\Seeders;

use App\Models\Backend\Why;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseWhySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Why::create([
            'title' => 'Mengapa Kurmin Academy?',
            'description' => 'Saatnya bijak memilih sumber belajar. Tak hanya materi yang terjamin,
                              Kurmin Academy juga memiliki reviewer profesional yang akan mengulas kode Anda.',
        ]);
    }
}
