<?php

use App\Models\SchoolPeriod;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RequirementSeeder::class);
        $this->call(CarrerSeeder::class);
        $this->call(ProjectTypeSeeder::class);
        $this->call(SchoolPeriodSeeder::class);
    }
}
