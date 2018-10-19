<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEtapeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etape', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gazde');
            $table->string('oaspeti');
            $table->integer('g_gazde')->nullable();
            $table->integer('g_oaspeti')->nullable();
            $table->integer('liga');
            $table->string('serie')->nullable();
            $table->integer('etapa');
            $table->date('data')->nullable();
            $table->string('ora')->nullable();
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
        Schema::dropIfExists('etape');
    }
}
