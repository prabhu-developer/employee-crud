<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            DepartmentsSeeder::class,
            GenderSeeder::class,
            BloodGroupSeeder::class
        ]); 
    }
}
