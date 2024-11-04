<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ['Data Science','Network Security'];

        for($i = 0; $i < 2; $i++) {
            Category::create([
                'name' => $category[$i],
            ]);
        }
    }
}
