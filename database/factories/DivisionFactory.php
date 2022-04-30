<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(15),
            'n_collaborators' => $this->faker->randomNumber(1, 10),
            'level' => $this->faker->randomNumber(1, 5),
            'ambassador' => $this->faker->name(),
        ];
    }
}
