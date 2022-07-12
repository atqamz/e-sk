<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SuratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(5, 20)),
            'nomor' => $this->faker->bothify('?????/#####'),
            'tentang' => $this->faker->sentence(mt_rand(10, 30), true),
            'tanggal' => $this->faker->dateTimeBetween('-1 years', '+1 years', 'Asia/Jakarta'),
            'kota' => $this->faker->city(),
            'user_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}
