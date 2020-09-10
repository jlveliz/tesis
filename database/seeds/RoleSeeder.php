<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
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
        $roles = ['Administrador', 'Estudiante', 'Gestor', 'Comisión', 'Tutores', 'Revisores'];
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
