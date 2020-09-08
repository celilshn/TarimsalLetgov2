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

foreach ($categories as $category):
$categoryObject = new \App\Category();
$categoryObject->name = $category;
$categoryObject->image ='https://loremflickr.com/100/100/dog';
$categoryObject->slug = Str::slug($category,'-');
$categoryObject->save();

endforeach;
}
}
