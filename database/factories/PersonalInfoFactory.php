<?php

namespace Database\Factories;

use App\Models\Personal_Info;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal_Info>
 */
class PersonalInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Personal_Info::class;
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'address' =>$this->faker->address,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
