<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePitanjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pitanja', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->text('Opis');
            $table->unsignedBigInteger('Kviz_id');
            $table->timestamps();

            $table->foreign('Kviz_id')->references('id')->on('kviz');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pitanja');
    }
}
