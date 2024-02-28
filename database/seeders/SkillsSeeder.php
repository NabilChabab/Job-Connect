<?php

namespace Database\Seeders;

use App\Models\Skill;

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Skills::factory(20)->create();
=======
        Skill::factory(15)->create();
>>>>>>> dev
    }
}
