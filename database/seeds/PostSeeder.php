<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $postType;
    private $homeType;

    public function __construct()
    {
        $this->postType = [
            "Sale",
            "Rent"
        ];
        $this->homeType = [
            "Flat",
            "Apartment",
            "Studio"
        ];
    }

    public function run()
    {
        $faker = Faker\Factory::create();
        $posts = [];
        for ($i = 1001; $i <= 2000; $i++) {
            $posts[$i]['id'] = $i;
            $posts[$i]['user_id'] = rand(1, 150);
            $posts[$i]['city_id'] = rand(1, 100);
            $posts[$i]['address'] = $faker->address;
            $posts[$i]['title'] = $faker->sentence();
            $posts[$i]['desc'] = $faker->sentences(rand(10, 40), true);
            $posts[$i]['post_type'] = $this->postType[rand(0, 1)];
            $posts[$i]['room_count'] = rand(1, 15);
            $posts[$i]['home_type'] = $this->homeType[rand(0, 2)];
            $posts[$i]['area'] = $faker->randomFloat(6, 2, 2);
            $posts[$i]['price'] = $faker->randomFloat(10, 2, 2);
            $posts[$i]['status'] = rand(1, 2);
            $posts[$i]['email_allowed'] = rand(0, 1);
        }
        App\Models\Posts::insert($posts);
    }
}
