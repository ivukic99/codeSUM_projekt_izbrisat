<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTecajTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tecaj', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->unsignedBigInteger('Tecaj_id');
            $table->unsignedBigInteger('User_id');
            $table->timestamps();

            $table->foreign('Tecaj_id')->references('id')->on('tecaj');
            $table->foreign('User_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_tecaj');
    }
}
