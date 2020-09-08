<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SiteSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteSettings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_main_catchword');
            $table->string('site_sub_catchword');
            $table->string('site_tab_mainpage');
            $table->string('site_tab_ads');
            $table->string('site_tab_contact');
            $table->string('site_tab_us');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siteSettings');
    }
}
