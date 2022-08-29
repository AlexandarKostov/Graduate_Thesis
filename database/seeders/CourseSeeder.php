<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::insert([
            [
                'name' => 'Graphic Design',
                'slug' => 'graphic-design',
                'description' => 'Illustrator, Photoshop, InDesign, Branding and logo design, Poster design, Packaging design, Motion design, After Effects',
                'lectures' => 35,
                'price' => 700,
                'approved' => 1,
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'HTML5, CSS3, Bootstrap, JavaScript, jQuery, AJAX, SQL, PHP, Laravel',
                'lectures' => 85,
                'price' => 2100,
                'approved' => 1,
            ],
            [
                'name' => 'Digital Marketing',
                'slug' => 'digital-marketing',
                'description' => 'WordPress & Elementor, Facebook Ads manager, Google Ads manager, Google Analytics',
                'lectures' => 69,
                'price' => 1350,
                'approved' => 1,
            ],
        ]);
    }
}
