<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        DatabaseAdminSeeder::class,
        DatabaseConfigurationSeeder::class,
        DatabaseHeroSeeder::class,
        DatabaseSuperioritySeeder::class,
        DatabaseSuperiorityImageSeeder::class,
        DatabaseWhySeeder::class,
        DatabaseWhyUsSeeder::class,
        DatabaseOurProgramSeeder::class,
        DatabaseCategoryServiceSeeeder::class,
        DatabaseServiceSeeder::class,
        ]);
    }
}
