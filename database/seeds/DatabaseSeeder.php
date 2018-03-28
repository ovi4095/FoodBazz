<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*   DB::table('users')->insert([
               'name' => "Admin Ovi",
               'email' => "alamin4095@diu.edu.bd",
               'password' => bcrypt('Bdnavwilllive1day'),
               'role' => "Admin",*/


        DB::table('restaurents')->insert([
            'restau_id'=> "res-".rand(000,9999),
            'restau_img'=> "images/restaurent/cafe/cc1.jpg",
            'restau_name'=> "Cafe Darbar",
            'restau_detail'=> "An Awesome plase to try testy and spicy foods",
            'rating'=> "★★★",
            'date'=> \Carbon\Carbon::now(),
            'rest_link'=> "home",
            'created_at'=> \Carbon\Carbon::now(),
            'updated_at'=> \Carbon\Carbon::now(),

            ]);

    }

}