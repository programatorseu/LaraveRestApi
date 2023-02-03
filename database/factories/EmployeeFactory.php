<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_id' => Company::factory(),
            'imie' => $this->faker->name(),
            'nazwisko' => $this->faker->lastName(),
            'email' => $this->faker->email(),
            'numer_telefonu' => $this->randomBool() ?? null
        ];
    }
    protected function randomBool()
    {
        return (bool) mt_rand(0, 1);
    }
}
