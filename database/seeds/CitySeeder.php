<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $cities = [];
        for ($i = 0; $i < 100; $i++) {
            $cities[$i]['name'] = $faker->city;
        }
        \App\Models\Cities::insert($cities);
    }
}
