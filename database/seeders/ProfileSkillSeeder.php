<?php

namespace Database\Seeders;

use App\Models\Profiles;
use App\Models\Skill;
use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    // Get the profile with ID 2
    $profile = Profiles::find(2);

    // Ensure the profile exists
    if ($profile) {
        // Get all skills
        $skills = Skill::all();

        // Check if there are skills available
        if ($skills->count() > 0) {
            // Attach random skills to the profile
            $profile->skills()->attach(
                $skills->random(rand(1, min(5, $skills->count())))->pluck('id')->toArray()
            );
        } else {
            $this->command->info('There are no skills available.');
        }
    } else {
        $this->command->info('Profile with ID 2 does not exist.');
    }
}
}
