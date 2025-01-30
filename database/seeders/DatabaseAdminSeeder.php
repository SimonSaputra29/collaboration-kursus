<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::Create([
            'email' => 'SuperAdmin@gmail.com',
            'password' => bcrypt('SuperAdmin@$%#^'),
            'role' => 'SuperAdmin',
        ]);
    }
}
