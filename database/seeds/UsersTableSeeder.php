<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        //generate 3 users
        DB::table('users')->insert([
            [
                'name' => "Luis Doe",
                'email' => "luisdoe@mail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Laura Doe",
                'email' => "lauradoe@mail.com",
                'password' => bcrypt('secret')
            ],
            [
                'name' => "Steph Doe",
                'email' => "stephdoe@mail.com",
                'password' => bcrypt('secret')
            ]
        ]);
    }
}
