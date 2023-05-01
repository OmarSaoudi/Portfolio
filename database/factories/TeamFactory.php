<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'specialist' => fake()->jobTitle(),
            'teams_images' => fake()->imageUrl(60,60),
            'phone' => fake()->e164PhoneNumber(),
            'link_facebook' => fake()->url(),
            'link_linkedin' => fake()->url(),
            'link_github' => fake()->url(),
            'link_twitter' => fake()->url(),
            'description' => fake()->text($maxNbChars = 100),
        ];
    }
}
