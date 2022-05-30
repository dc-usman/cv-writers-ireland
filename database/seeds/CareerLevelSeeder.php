<?php

use App\CareerLevel;
use Illuminate\Database\Seeder;

class CareerLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CareerLevel::insert([[
            'name' => 'Entry Level 0 - 2 years',
        ],
        [
            'name' => 'Mid Level 2 - 8 years',
        ],
        [
            'name' => 'Senior Level - 8+ years',
        ],
        [
            'name' => 'Career Change',
        ],

        ]);
    }
}
