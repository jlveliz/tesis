<?php

use Illuminate\Database\Seeder;
use App\Models\Carrer;

class CarrerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrer::create([
            'name' => 'Ingenieria de Sistemas Computacionales',
            'description' => 'Carrera excelente',
            'state' => 1
        ]);
    }
}
