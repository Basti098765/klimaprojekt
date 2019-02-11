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
        Schema::create('anwesenheits', function (Blueprint $table) {
            $table->increments('awId');
            $table->string('awVon');
            $table->string('awBis');
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
