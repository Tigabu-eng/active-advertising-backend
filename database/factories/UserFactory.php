<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_first_name' => $this->faker->firstName,
            'user_last_name' => $this->faker->lastName,
            'user_email' => $this->faker->unique()->safeEmail,
            'user_role' => $this->faker->randomElement(['admin', 'user']),
            'user_phone_number' => $this->faker->phoneNumber,
            'user_address' => $this->faker->address,
            'user_image_url' => $this->faker->imageUrl(200, 200, 'people'),
            'password' => bcrypt('password'), // Replace with hashed password or any other default value
            
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
