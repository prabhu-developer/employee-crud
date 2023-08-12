<?php

namespace Database\Seeders;

use App\Models\Departments;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departments::insert([
            [
                "name" => 'Sales',
                "slug" => 'sales',  
                'is_active' => true
            ],
            [
                "name" => 'Marketing',
                "slug" => 'marketing',
                'is_active' => true
            ]
        ]);
    }
}
