<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataBarang>
 */
class DataBarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'barcode' => $this->faker->ean13(),
            'nama_barang' => $this->faker->semver(true, true),
            'satuan' => $this->faker->word(),
            'jumlah_barang' => $this->faker->randomNumber(3, true)
        ];
    }
}
