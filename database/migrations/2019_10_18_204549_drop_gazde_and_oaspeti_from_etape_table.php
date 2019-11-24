<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropGazdeAndOaspetiFromEtapeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etape', function (Blueprint $table) {
            $table->dropColumn('gazde');
            $table->dropColumn('oaspeti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etape', function (Blueprint $table) {
            //
        });
    }
}
