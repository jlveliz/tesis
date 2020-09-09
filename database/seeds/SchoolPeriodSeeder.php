<?php

use Illuminate\Database\Seeder;
use App\Models\SchoolPeriod;

class SchoolPeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = ['2019-2020', '2020-2021'];

        foreach ($periods as $period) {
            SchoolPeriod::create([
                'name' => $period,
                'description' => 'lorem',
                'state' => 1
            ]);
        }
    }
}
