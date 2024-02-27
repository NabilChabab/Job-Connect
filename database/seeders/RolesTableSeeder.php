<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
           'name' => 'amdin',
        ]);
        Role::create([
            'name' => 'employee',
        ]);
        Role::create([
            'name' => 'recruter',
        ]);
        Role::create([
            'name' => 'representant',
        ]);
    }
}