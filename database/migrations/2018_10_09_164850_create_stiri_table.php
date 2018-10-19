<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStiriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stiri', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('categorie_id');
            $table->boolean('pin')->default(false);
            $table->string('titlu', 256);
            $table->string('imagine', 256);
            $table->string('introducere', 100);
            $table->text('continut');
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
        Schema::dropIfExists('stiri');
    }
}
