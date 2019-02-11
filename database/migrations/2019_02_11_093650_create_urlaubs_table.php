<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlaubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urlaubs', function (Blueprint $table) {
            $table->increments('uId');
            $table->string('uGuthabenVorjahr');
            $table->string('uGuthabenAktuell');
            $table->string('uBemerkung');
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
        Schema::dropIfExists('urlaubs');
    }
}
