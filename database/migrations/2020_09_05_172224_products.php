<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->text('description');
            $table->string('slug');
//            $table->integer('commentCount');
            $table->integer('views')->default(0);
            //$table->integer('city_id');
            $table->integer('town_id');

            $table->timestamps();

            $table->foreign('category_id')->references('id')
                ->on('categories');
            $table->foreign('user_id')->references('id')
                ->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
