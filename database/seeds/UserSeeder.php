<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');
        $adminRole = Role::where('slug','administrador')->first();
       
        $user = User::create([
            'name' => 'Jorge Luis',
            'email' => 'jorgeconsalvacioan@gmail.com',
            'password' => $password,
            'role_id' => $adminRole->id
        ]);
        
       
    }
}
