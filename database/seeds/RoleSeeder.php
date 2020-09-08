<?php

use Illuminate\Database\Seeder;
use Pktharindu\NovaPermissions\Role;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Administrador', 'Estudiante', 'Gestor', 'Comisión'];
        foreach ($roles as $key => $role) {
            $snake = Str::snake($role);
            Role::create([
                'name' => $role,
                'slug' => $snake,
                'is_lock' => 1
            ]);
        }
    }
}
