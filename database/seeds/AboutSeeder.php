<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $about = new \App\Models\About();
        $about->para1 = $faker->paragraph(2,true);
        $about->para2 = $faker->paragraph(2,true);
        $about->whyus1 = $faker->paragraph(2,true);
        $about->whyus2 = $faker->paragraph(2,true);

        $about->save();
    }
}
