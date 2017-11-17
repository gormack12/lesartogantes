<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('path_to_hero_picture');
            $table->string('theme');
            $table->string('name')->unique();
            $table->integer('startday');
            $table->integer('startmonth');
            $table->integer('startyear');
            $table->integer('endday');
            $table->integer('endmonth');
            $table->integer('endyear');
            $table->string('location');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
