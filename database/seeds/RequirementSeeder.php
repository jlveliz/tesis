<?php

use Illuminate\Database\Seeder;
use App\Models\Requirement;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Requirement::create([
            'name' => 'Copia de Cédula',
            'state' => 1,
            'is_required' => 0
        ]);
    }
}
