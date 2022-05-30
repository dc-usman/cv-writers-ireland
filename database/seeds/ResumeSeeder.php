<?php

use App\Resume;
use Illuminate\Database\Seeder;

class ResumeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resume::insert([
            ['name' => 'Resume Writing - 195 AED',],
            ['name' => 'Resume Writing - 255 AED'],
            ['name' => 'Resume Writing - 275 AED'],
            ['name' => 'Resume Writing - 275 AED'],
        ]);
    }
}
