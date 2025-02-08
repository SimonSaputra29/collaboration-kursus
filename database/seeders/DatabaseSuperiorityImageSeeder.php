<?php

namespace Database\Seeders;

use App\Models\Backend\SuperiorityImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSuperiorityImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SuperiorityImage::create([
            'image' => '',
        ]);
    }
}
