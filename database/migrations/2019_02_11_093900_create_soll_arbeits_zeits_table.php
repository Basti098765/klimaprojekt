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
        Schema::create('soll_arbeits_zeits', function (Blueprint $table) {
            $table->increments('sollId');
            $table->string('sollVon');
            $table->string('sollBis');
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
