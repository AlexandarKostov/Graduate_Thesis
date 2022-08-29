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
        $categories = ['Motivation', 'Development', 'Design', 'Social Media', 'Speeches', 'Copywriting', 'Social Media Tools'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
