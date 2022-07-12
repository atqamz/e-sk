<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubkontenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subkonten = collect($this->faker->paragraphs(mt_rand(3, 7)))->map(function ($paragraph) {
            return "<li>" . $paragraph . "</li>";
        })->implode('');

        return [
            'konten_id' => mt_rand(1, 2),
            'judul_subkonten' => $this->faker->word(),
            'subkonten' => "<ol type='a'>" . $subkonten . "</ol>",
        ];
    }
}
