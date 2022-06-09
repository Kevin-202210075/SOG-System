<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataCustomer>
 */
class DataCustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_customer' => $this->faker->company(),
            'kota' => $this->faker->city(),
            'sales' => $this->faker->name(),
            'area' => $this->faker->countryISOAlpha3()
        ];
    }
}
