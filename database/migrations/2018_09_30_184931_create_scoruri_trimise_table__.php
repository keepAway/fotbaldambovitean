<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoruriTrimiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoruri_trimise', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('gazde');
            $table->string('oaspeti');
            $table->integer('g_gazde')->nullable();
            $table->integer('g_oaspeti')->nullable();
            $table->integer('liga');
            $table->string('serie')->nullable();
            $table->integer('etapa');
            $table->text('contestatie')->nullable();
            $table->text('incident')->nullable();
            $table->text('alte_detalii')->nullable();
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
        Schema::dropIfExists('scoruri_trimise');
    }
}
