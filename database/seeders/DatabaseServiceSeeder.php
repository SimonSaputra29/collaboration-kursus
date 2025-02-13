<?php

namespace Database\Seeders;

use App\Models\Backend\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'category_service_id' => '1',
            'title' => '',
            'overview' => '',
            'description' => '',
            'link' => '',
        ]);
        
    }
}
