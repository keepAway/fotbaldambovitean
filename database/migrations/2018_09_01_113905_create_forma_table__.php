<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('etapa_id');
            $table->string('echipa');
            $table->string('forma');
            $table->boolean('gazde')->default(false);
            $table->boolean('oaspeti')->default(false);
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
        Schema::dropIfExists('forma');
    }
}
