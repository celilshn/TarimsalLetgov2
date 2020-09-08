<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0;$i<99;$i++)
        {
            $name = $faker->sentence(3,true);
            \Illuminate\Support\Facades\DB::table('products')->insert([
                'category_id'=>rand(1,10),
                'user_id'=>rand(1,100),
                'name'=>$name,
                'slug'=>Str::slug($name,'-'),
                'description'=>$faker->paragraph(3,true),
            //    'images'=>$faker->imageUrl(400, 600, rand(1,250), true, 'Faker'),
                'created_at'=>$faker->dateTime('now','Europe/Istanbul'),
                'updated_at'=>now()
            ]);
        }
    }
}
