<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::insert([
            [

                "name"      => "Male",
                "slug"      => Str::slug("Male"),
                "is_active" => true
            ],
            [

                "name"      => "Female",
                "slug"      => Str::slug("Female"),
                "is_active" => true
            ],
            [

                "name"      => "Transgender",
                "slug"      => Str::slug("Transgender"),
                "is_active" => true
            ],
            [

                "name"      => "Other",
                "slug"      => Str::slug("Other"),
                "is_active" => true
            ]
        ]);
    }
}
