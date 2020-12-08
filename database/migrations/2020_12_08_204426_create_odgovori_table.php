<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdgovoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odgovori', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->text('Opis');
            $table->boolean('Istinitost');
            $table->unsignedBigInteger('Pitanja_id');
            $table->timestamps();

            $table->foreign('Pitanja_id')->references('id')->on('pitanja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('odgovori');
    }
}
