<?php

namespace Database\Seeders;

use App\Models\Backend\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Simon Saputra',
            'role' => 'FrontendDeveloper',
            'image' => 'uploads/team_images/simon.jpg',
        ]);

        Team::create([
            'name' => 'Akmal Rahmattullah Nugraha',
            'role' => 'BackendDeveloper',
            'image' => 'uploads/team_images/akmal.jpg',
        ]);
    }
}

