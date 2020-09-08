<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<100;$i++){
            $username = $faker->userName;
        \Illuminate\Support\Facades\DB::table('users')->insert(
            [
                'username' =>$username,
                'name' =>$faker->name,
                'password' =>$faker->password,
                'email' =>$faker->email,
                'phone' =>$faker->phoneNumber,
                'city' =>$faker->city,
                'town' =>$faker->city,
            ]
        );
        }
    }
}
