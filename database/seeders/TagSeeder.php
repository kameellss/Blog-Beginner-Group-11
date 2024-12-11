<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    public function run()
    {
        // Create makeup-related tags
        Tag::create(['name' => 'Foundation']);
        Tag::create(['name' => 'Lipstick']);
        Tag::create(['name' => 'Eyeshadow']);
        Tag::create(['name' => 'Skincare Routine']);
        Tag::create(['name' => 'Beauty Tips']);
    }
}
