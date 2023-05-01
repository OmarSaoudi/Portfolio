<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'title' => fake()->word(),
             'name' => fake()->name(),
             'email' => fake()->unique()->safeEmail(),
             'address' => fake()->address(),
             'country' => fake()->country(),
             'city' => fake()->city(),
             'phone' => fake()->e164PhoneNumber(),
             'mobile' => fake()->e164PhoneNumber(),
             'settings_images' => fake()->imageUrl(60,60),
             'link_linkedin' => fake()->url(),
             'link_github' => fake()->url(),
             'link_facebook' => fake()->url(),
             'link_twitter' => fake()->url(),
             'description' => fake()->paragraph(),
        ];
    }
}
