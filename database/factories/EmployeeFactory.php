<?php

namespace Database\Factories;

use App\Models\City;
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
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'middle_name' => $this->faker->lastName,
            'address' => $this->faker->address,
            'zip_code' => str_replace('-', '', $this->faker->postcode),
            'date_hired' => $this->faker->dateTimeBetween('-5 years', 'now'),
            'date_of_birth' => $this->faker->dateTimeBetween('-50 years', '-18 years'),
            'department_id' => rand(1, 5),
            'country_id' => rand(1, 100),
            'state_id' => rand(1, 50),
            'city_id' => rand(1, 40000),
        ];
    }
}
