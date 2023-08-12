<?php

namespace Database\Seeders;

use App\Models\BloodGroup;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodGroup::insert([
            [
                "name" => "A+",
                "is_active" => true
            ],
            [
                "name" => "A-",
                "is_active" => true
            ],
            [
                "name" => "B+",
                "is_active" => true
            ],
            [
                "name" => "B-",
                "is_active" => true
            ],
            [
                "name" => "AB+",
                "is_active" => true
            ],
            [
                "name" => "AB-",
                "is_active" => true
            ],
            [
                "name" => "O+",
                "is_active" => true
            ],
            [
                "name" => "O-",
                "is_active" => true
            ],
        ]);
    }
}
