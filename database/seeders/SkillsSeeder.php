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
        Skill::factory(15)->create();
    }
}
