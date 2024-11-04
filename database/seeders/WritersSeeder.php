<?php

namespace Database\Seeders;

use App\Models\Writer;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class WritersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $division = ['Spesialis Interactive Multimedia','Spesialis Data Science','Spesialis Network Security'];

        $photo_path = [
            'assets/profile/user1.jpg',
            'assets/profile/user2.jpg',
            'assets/profile/user3.jpg'
        ];

        for($i = 0; $i < 3; $i++) {
            Writer::create([
                'name' => $faker->name,
                'division' => $division[$i],
                'asset_path' => $photo_path[$i]
            ]);
        }
    }
}
