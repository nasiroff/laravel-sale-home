<?php

use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->image();
        $actions = [];
        for ($i = 0; $i <= 30; $i++){
            $actions[$i]['controller'] = $faker->word;
            $actions[$i]['method'] = $faker->word;
        }
        \App\Models\Actions::insert($actions);
    }
}
