<?php

use Illuminate\Database\Seeder;

class PostImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $images = [];
        for ($i = 0; $i < 6000; $i++) {
            $images[$i]['post_id'] = rand(1001, 2000);
            $images[$i]['image_path'] = \Illuminate\Support\Facades\Storage::disk('public')->put("images", new \Illuminate\Http\File($faker->image(null, 640, 480, null, true)));
        }
        \App\Models\PostImages::insert($images);
    }
}
