<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $users = [];
        for ($i = 0; $i < 150; $i++) {
            $users[$i]['first_name'] = $faker->firstName();
            $users[$i]['last_name'] = $faker->lastName;
            $users[$i]['email'] = $faker->email;
            $users[$i]['password'] = \Illuminate\Support\Facades\Hash::make("321654987");
            $users[$i]['role_id'] = 3;
        }
        \App\Models\Users::insert($users);
    }
}
