<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = [
            'Sebze',
            'Meyve',
            'Fidancılık',
            'Hububat',
            'Gübre',
            'Tarıımsal Ekipman',
            'Peyzaj',
            'Traktör',
            'Hayvancılık',
            'İşlenmiş Ürünler'];
        $links = [
            'sebze.png',
            'meyve.png',
            'fidanclk.png',
            'hububat.png',
            'gbre.png',
            'ekiman.png',
            'peyzaj.png',
            'traktr.png',
            'hayvanclk.png',
            'islenmis.png',
        ];

        for ($i = 0; $i < count($categories); $i++) {
            $categoryObject = new \App\Models\Category();
            $categoryObject->name = $categories[$i];
            $categoryObject->image = $links[$i];
            $categoryObject->slug = Str::slug($categories[$i], '-');
            $categoryObject->save();
        }
    }
}
