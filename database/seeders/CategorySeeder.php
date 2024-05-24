<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Fullstack', 'Front-end', 'Programming', 'Back-end', 'IoT', 'Testing', 'Libraries'];

        foreach ($categories as $category) {
            $newCat = new Category();
            $newCat->name = $category;
            $newCat->slug = Str::slug($newCat->name, '-');
            $newCat->save();
        }
    }
}
