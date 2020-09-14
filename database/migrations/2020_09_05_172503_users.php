<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default('');
            $table->string('password');
            $table->string('email');
            $table->string('phone')->default('');
            $table->string('city')->default('');
            $table->string('town')->default('');
            $table->string('userImage')->default('img');
            $table->dateTime('lastLoginDate')->default(now());
            $table->rememberToken()->default('');
            $table->timestamps();
            $table->unique('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
