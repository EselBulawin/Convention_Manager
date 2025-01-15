<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Participation;
use App\Models\Convention;

class ParticipationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conventions = Convention::all();


        if ($conventions->isEmpty()) {
            $this->command->error('No conventions found. Please seed conventions first.');
            return;
        }

        Participation::factory()->count(10)->create([
            'convention_id' => $conventions->random()->id,
        ]);
    }
}
