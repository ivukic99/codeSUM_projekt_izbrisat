<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRijeseniZadaciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rijeseni_zadaci', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Kviz_id');
            $table->unsignedBigInteger('Tecaj_id');
            $table->unsignedBigInteger('Programski_zadaci_id');
            $table->unsignedBigInteger('Pismene_lekcije_id');
            $table->unsignedBigInteger('Video_lekcije_id');
            $table->timestamps();

            $table->foreign('Kviz_id')->references('id')->on('kviz');
            $table->foreign('Tecaj_id')->references('id')->on('tecaj');
            $table->foreign('Programski_zadaci_id')->references('id')->on('programski_zadaci');
            $table->foreign('Pismene_lekcije_id')->references('id')->on('pismene_lekcije');
            $table->foreign('Video_lekcije_id')->references('id')->on('video_lekcije');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rijeseni_zadaci');
    }
}
