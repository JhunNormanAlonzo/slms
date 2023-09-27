<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Super Admin'
        ]);

        Role::create([
            'name' => 'Administrator'
        ]);

        Role::create([
            'name' => 'Developer'
        ]);

        Role::create([
            'name' => 'Licenser'
        ]);

        Role::create([
            'name' => 'Support'
        ]);

    }
}