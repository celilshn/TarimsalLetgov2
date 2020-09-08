<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 99; $i++) {
            for ($j = 0; $j< 4; $j++) {
                \Illuminate\Support\Facades\DB::table('images')->insert([
                    'product_id'=>$i,
                    'url'=>$faker->imageUrl(400, 600, rand(1,250), true, 'Faker'),
                    'created_at'=>$faker->dateTime('now','Europe/Istanbul'),
                    'updated_at'=>now()
                ]);

            }
        }
    }
}
