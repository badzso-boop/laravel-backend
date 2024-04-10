<?php

namespace Database\Seeders;

use App\Models\Spritzer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpritzerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Spritzer::truncate();

        Spritzer::create([
            'name' => "Nagyfroccs",
            'type' => "feher",
            'wine' => 2,
            'water' => 1,
            'price' => 1500,
        ]);

        Spritzer::create([
            'name' => "Kisfroccs",
            'type' => "feher",
            'wine' => 1,
            'water' => 2,
            'price' => 1000,
        ]);
    }
}
