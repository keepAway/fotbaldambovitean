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
            $table->integer('a_meciuri')->default(0);
            $table->integer('a_victorii')->default(0);
            $table->integer('a_egaluri')->default(0);
            $table->integer('a_infrangeri')->default(0);
            $table->integer('a_marcate')->default(0);
            $table->integer('a_primite')->default(0);
            $table->integer('a_golaveraj')->default(0);
            $table->integer('a_puncte')->default(0);
            $table->integer('d_meciuri')->default(0);
            $table->integer('d_victorii')->default(0);
            $table->integer('d_egaluri')->default(0);
            $table->integer('d_infrangeri')->default(0);
            $table->integer('d_marcate')->default(0);
            $table->integer('d_primite')->default(0);
            $table->integer('d_golaveraj')->default(0);
            $table->integer('d_puncte')->default(0);
            $table->integer('t_meciuri')->default(0);
            $table->integer('t_victorii')->default(0);
            $table->integer('t_egaluri')->default(0);
            $table->integer('t_infrangeri')->default(0);
            $table->integer('t_marcate')->default(0);
            $table->integer('t_primite')->default(0);
            $table->integer('t_golaveraj')->default(0);
            $table->integer('t_puncte')->default(0);
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
