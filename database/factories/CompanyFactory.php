<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nazwa' => $this->faker->company(),
            'nip' => (string)$this->faker->unique()->numberBetween(10000000, 9999999999),
            'adres' => $this->faker->streetAddress(),
            'miasto' => $this->faker->city(),
            'kod_pocztowy' => $this->faker->postcode()
        ];
    }
}
