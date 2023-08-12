<?php

namespace Database\Seeders;

use App\Models\Religion;
use Illuminate\Database\Seeder;

class ReligionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Religion::insert([
            [
                "name" => "Islam",
                "is_active" => true
            ],
            [
                "name" => "Hinduism",
                "is_active" => true
            ],
            [
                "name" => "Buddhists",
                "is_active" => true
            ],
            [
                "name" => "Christians",
                "is_active" => true
            ],
            [
                "name" => "Animists",
                "is_active" => true
            ],
            [
                "name" => "Other",
                "is_active" => true
            ],
        ]);
    }
}
