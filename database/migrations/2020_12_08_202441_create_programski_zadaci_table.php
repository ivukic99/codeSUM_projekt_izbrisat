<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramskiZadaciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programski_zadaci', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('Naziv', 50);
            $table->text('Opis');
            $table->string('Poveznica',300);
            $table->integer('Rezultat');
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
        Schema::dropIfExists('programski_zadaci');
    }
}
