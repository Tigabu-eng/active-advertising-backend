<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proforma>
 */
class ProformaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoice_date' => $this->faker->date,
            'payment_request_number' => $this->faker->unique()->numberBetween(1000, 9999),

            'active_tin_number' => $this->faker->bothify('##??###?##'),
            'active_account_number' => $this->faker->bankAccountNumber,
            'active_vat' => $this->faker->randomNumber(5),
            'active_phone_number' => $this->faker->phoneNumber,
            'active_email' => $this->faker->email,
            'client_name' => $this->faker->company,
            'client_tin_number' => $this->faker->bothify('##??###?##'),
            'client_phone_number' => $this->faker->phoneNumber,
            'price_validity' => $this->faker->randomElement(['30 days', '60 days', '90 days']),
            'payment_method' => $this->faker->randomElement(['Credit Card', 'Bank Transfer', 'PayPal']),
            'contact_person' => $this->faker->name,
        ];
    }
}