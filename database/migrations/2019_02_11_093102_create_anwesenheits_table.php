<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnwesenheitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_anwesenheit', function (Blueprint $table) {
            $table->increments('awId');
            $table->dateTime('awVon');
            $table->dateTime('awBis');
            $table->string('awBemerkung');
            $table->integer('stId');
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
        Schema::dropIfExists('anwesenheits');
    }
}
