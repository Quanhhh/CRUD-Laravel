<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class FlightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++ ){
            DB::table('Flights')->insert([
            'Aircraft_ID' => $faker->postcode,
            'Departure_Airport' => $faker->country,
            'Arrival_Airport' => $faker->country,
            'Departure_Time' => $faker->time,
            'Arrival_Time' => $faker->time,
            'Flight_Duration' => $faker->time,
            ]);
        }
    }
}
