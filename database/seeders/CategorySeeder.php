<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Motivation' => 'motivation', 
        'Development' => 'development', 
        'Design' => 'design', 
        'Social Media' => 'social-media', 
        'Speeches' => 'speeches', 
        'Copywriting' => 'copywriting', 
        'Social Media Tools' => 'social-media-tools'];

        foreach ($categories as $category => $slug) {
            Category::create(['name' => $category, 'slug' => $slug]);
        }
    }
}
