<?php

namespace Database\Seeders;

use Database\Seeders\ProjectSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProjectSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
