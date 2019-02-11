<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArbeitAmProjektsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_arbeitAmProjekt', function (Blueprint $table) {
            $table->increments('aapid');
            $table->string('aapGesamtZeit');
            $table->integer('pjId');
            $table->integer('awId');
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
        Schema::dropIfExists('arbeit_am_projekts');
    }
}
