<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        $posts = [];
        $faker = Factory::create();
        for ($i=1; $i <= 10 ; $i++) { 
            $date = date('Y-m-d H:i:s');
            $posts[] = [
                'author_id' => rand(1, 3),
                'title'     => $faker->sentence(rand(8, 12)),
                'slug'      => $faker->slug(),
                'excerpt'   => $faker->text(rand(180, 250)),
                'body'      => $faker->paragraph(rand(10, 15), true),
                'image'     => 'default.png',
                'created_at' => $date,
                'updated_at' => $date

            ];
        }

        DB::table('posts')->insert($posts);
    }
}
