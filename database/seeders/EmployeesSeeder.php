<?php

namespace Database\Seeders;

use App\Models\Employees;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    public function run()
    {
        Employees::insert([
            [
                'name'             => "Whilemina Watts",
                'department_id'    => 1,
                'designation'      => "Sales Manager",
                'mobile'           => "7765788164",
                'salary'           => 50000,
                'birth_date'       => "1999-11-04",
                'gender_id'        => 1,
                'blood_group_id'   => 1,
                'religion_id'      => 2,
                'appointment_date' => "2023-10-17",
                'join_date'        => "2023-10-17",
                'address'          => "Chennai, Tamilnadu, India.",
                'created_at'       => date('Y-m-d'),
                'updated_at'       => date('Y-m-d'),
            ],
            [
                'name'             => "Paki Wolf",
                'department_id'    => 1,
                'designation'      => "Marketing  Manager",
                'mobile'           => "9565788164",
                'salary'           => 40000,
                'birth_date'       => "2003-10-03",
                'gender_id'        => 1,
                'blood_group_id'   => 1,
                'religion_id'      => 2,
                'appointment_date' => "2023-06-15",
                'join_date'        => "2023-06-17",
                'address'          => "Chennai, Tamilnadu, India.",
                'created_at'       => date('Y-m-d'),
                'updated_at'       => date('Y-m-d'),
            ],
            [
                'name'             => "Mari Johns",
                'department_id'    => 1,
                'designation'      => "Salesman",
                'mobile'           => "8565788164",
                'salary'           => 35000,
                'birth_date'       => "2000-12-10",
                'gender_id'        => 1,
                'blood_group_id'   => 1,
                'religion_id'      => 2,
                'appointment_date' => "2023-09-10",
                'join_date'        => "2023-09-16",
                'address'          => "Chennai, Tamilnadu, India.",
                'created_at'       => date('Y-m-d'),
                'updated_at'       => date('Y-m-d'),
            ]
        ]);
    }
}
