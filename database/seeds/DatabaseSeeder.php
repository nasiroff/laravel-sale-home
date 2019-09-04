<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                RoleSeeder::class,
                ActionSeeder::class,
                RoleActionSeeder::class,
                UserSeeder::class,
                CitySeeder::class,
                PostSeeder::class,
                PostImagesSeeder::class
            ]
        );
    }
}
