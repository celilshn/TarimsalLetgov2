<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SiteSettingSeeder extends Seeder
{
    public function run()
    {
        DB::table('sitesettings')->insert([
            'id'=>1,
            'site_name' =>'Tarımsal Letgo',
            'site_main_catchword' =>'Türkiyenin En Büyük Tarım İlanları',
            'site_sub_catchword' =>'İstediğiniz her şeyi alabilir, satabilirsiniz.',
            'site_tab_mainpage' =>'Anasayfa',
            'site_tab_ads' =>'İlanlar',
            'site_tab_contact' =>'İletişim',
            'site_tab_us' =>'Hakkımızda',
            'logo'=>'a.png',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
