<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tamu;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tamu>
 */
class TamuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'username' => $this->faker->sentence(),
           'name' => $this->faker->sentence(),
           'email' => $this->faker->sentence(),
           'phone' => $this->faker->sentence(),
           'tujuan_kunjungan' => $this->faker->sentence(),
           'tanggal_kunjungan' => $this->faker->sentence(),
           'catatan' => $this->faker->sentence(),
        ];
    }
}
