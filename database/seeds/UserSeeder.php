<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Pktharindu\NovaPermissions\Role;

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
        $user = User::create([
            'name' => 'Jorge Luis',
            'email' => 'jorgeconsalvacioan@gmail.com',
            'password' => $password
        ]);
        
       if($user) {
           $adminRole = Role::where('slug','administrador')->first();
           if($adminRole) {
               $user->assignRole($adminRole);
           }
       }
    }
}
