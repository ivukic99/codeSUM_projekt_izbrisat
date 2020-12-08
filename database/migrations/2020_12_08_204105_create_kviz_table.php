<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKvizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kviz', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('Naziv', 50);
            $table->unsignedBigInteger('Tecaj_id');
            $table->timestamps();

            $table->foreign('Tecaj_id')->references('id')->on('tecaj');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kviz');
    }
}
