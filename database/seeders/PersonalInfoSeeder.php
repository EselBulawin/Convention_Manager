<?php

namespace Database\Seeders;

use App\Models\Personal_Info;
use App\Models\User;
use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        if ($users->isEmpty()) {
            $this->command->info('No users found. Skipping PersonalInfoSeeder.');
            return;
        }

        Personal_Info::factory()->count(10)->create([
            'user_id' => $users->random()->id,
        ]);
    }
}
