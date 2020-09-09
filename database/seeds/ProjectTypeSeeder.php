<?php

use Illuminate\Database\Seeder;
use App\Models\ProjectType;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            'Desarrollo',
            'Investigación'
        ];

        foreach ($types as $type) {
            ProjectType::create(
                [
                    'name' => $type,
                    'description' => 'lorem ipsum',
                    'state' => 1
                ]
            );
        }
    }
}
