<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEchipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echipe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('echipa');
            $table->integer('liga');
            $table->string('serie')->nullable();
            $table->integer('meciuri')->default(0);
            $table->integer('victorii')->default(0);
            $table->integer('egaluri')->default(0);
            $table->integer('infrangeri')->default(0);
            $table->integer('marcate')->default(0);
            $table->integer('primite')->default(0);
            $table->integer('golaveraj')->default(0);
            $table->integer('puncte')->default(0);
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
        Schema::dropIfExists('echipe');
    }
}
