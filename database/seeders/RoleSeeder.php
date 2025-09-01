<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['artista', 'musico', 'cantante', 'actor', 'bailarin', 'productor', 'compositor'];
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
