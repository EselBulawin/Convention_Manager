<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Participation;
use App\Models\Convention;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participations>
 */
class ParticipationFactory extends Factory
{
    protected $model = Participation::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->word(),
            'remarks' => $this->faker->sentence(),
            'convention_id' => Convention::factory(),
            'user_id' =>User::factory(),
        ];
    }
}
