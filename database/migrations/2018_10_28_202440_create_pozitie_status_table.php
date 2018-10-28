<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePozitieStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pozitie_status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('liga');
            $table->string('serie')->nullable();
            $table->integer('pozitie');
            $table->string('status');
            $table->string('culoare');
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
        Schema::dropIfExists('pozitie_status');
    }
}
