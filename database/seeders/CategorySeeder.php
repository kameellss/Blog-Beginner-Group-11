<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // Create makeup-related categories
        Category::create(['name' => 'Makeup']);
        Category::create(['name' => 'Skincare']);
        Category::create(['name' => 'Beauty Tips']);
    }
}
