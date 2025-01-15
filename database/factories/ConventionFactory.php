<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Convention>
 */
class ConventionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'venue' => $this->faker->city,
            'fee' => $this->faker->randomFloat(2, 10, 500),
            'remarks' => $this->faker->sentence,
        ];
    }
}
