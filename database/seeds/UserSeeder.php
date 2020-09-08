<?php

use Illuminate\Database\Seeder;
use App\Models\User;


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
        User::create([
            'name' => 'Jorge Luis',
            'email' => 'jorgeconsalvacion@gmail.com',
            'password' => $password
        ]);
    }
}
