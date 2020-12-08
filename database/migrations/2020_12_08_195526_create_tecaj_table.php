<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecajTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecaj', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->unsignedBigInteger('Kategorije_id');
            $table->timestamps();

            $table->foreign('Kategorije_id')->references('id')->on('kategorije');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tecaj');
    }
}
