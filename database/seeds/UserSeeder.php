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
        for($i=1;$i<101;$i++){
            $username = $faker->userName;
        \Illuminate\Support\Facades\DB::table('users')->insert(
            [
                'id'=>$i,
                'name' =>$faker->name,
                'password' =>\Illuminate\Support\Facades\Hash::make('123abc123'),
                'email' =>$faker->email,
                'phone' =>$faker->phoneNumber,
                'city' =>$faker->city,
                'town' =>$faker->city,
            ]
        );
        }
    }
}
