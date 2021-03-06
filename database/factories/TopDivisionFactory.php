<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TopDivisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'division_id' => $this->faker->randomNumber(1, 5),
            'top_division_id' => $this->faker->randomNumber(1, 5)
        ];
    }
}
