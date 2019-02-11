<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStammdatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_stammdaten', function (Blueprint $table) {
            $table->increments('stId');
            $table->string('stDienststelle');
            $table->string('stJahr');
            $table->string('stOstern'); //optional evtl später entfernen
            $table->integer('pId');
            $table->integer('uId');
            
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
        Schema::dropIfExists('stammdatens');
    }
}
