<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFehlzeitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fehlzeits', function (Blueprint $table) {
            $table->increments('fid');
            $table->string('fVon');
            $table->string('fBis');
            $table->string('fBemerkung');
            $table->integer('stID');
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
        Schema::dropIfExists('fehlzeits');
    }
}
