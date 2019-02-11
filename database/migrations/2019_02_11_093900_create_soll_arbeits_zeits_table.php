<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSollArbeitsZeitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sollArbeitsZeit', function (Blueprint $table) {
            $table->increments('sollId');
            $table->dateTime('sollVon');
            $table->dateTime('sollBis');
            $table->string('sollBemerkung');
            $table->string('sWochenTag');
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
        Schema::dropIfExists('soll_arbeits_zeits');
    }
}
