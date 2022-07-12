<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KontenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'surat_id' => 1,
            'judul_konten' => $this->faker->sentence(mt_rand(5, 20)),
        ];
    }
}
