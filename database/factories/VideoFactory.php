<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => fake()->sentence(),
            'thumbnailUrl' => 'video/1.png',
            'videoUrl' => 'video/1.png',
            'datePosted' => fake()->date(),
            'views' => fake()->randomNumber(),
            'likes' => fake()->randomNumber(),
            'description' => fake()->paragraph(),
            'user_id' => 1,
        ];
    }
}
