<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nama_pemain" => fake()->name(),
            "no_punggung" => fake()->randomDigit(),
            "posisi" => fake()->randomElement(["Penyerang", "Gelandang", "kiper"])
        ];
    }
}
