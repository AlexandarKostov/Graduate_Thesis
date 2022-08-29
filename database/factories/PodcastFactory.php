<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Podcast>
 */
class PodcastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 7),
            'name' => fake()->sentence(),
            'slug' => fake()->slug(),
            'publisher' => fake()->firstName() . " " . fake()->lastName(),
            'url' => fake()->url(),
        ];
    }
}
