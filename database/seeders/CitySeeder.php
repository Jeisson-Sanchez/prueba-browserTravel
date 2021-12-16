<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(['name' => 'Miami', 'code' => '33101', 'latitude' => '25.7751', 'length' => '-80.2105', 'country_id' => 1]);
        City::create(['name' => 'New York', 'code' => '10001', 'latitude' => '40.6643', 'length' => '-73.9385', 'country_id' => 1]);
        City::create(['name' => 'Orlando', 'code' => '32832', 'latitude' => '28.4159', 'length' => '-81.2988', 'country_id' => 1]);
    }
}
