<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('latitude');
            $table->integer('longitude');
            $table->text('description');
            $table->integer('id_city')->unsigned();
            $table->integer('id_department')->unsigned();
            $table->integer('id_region')->unsigned();
            $table->integer('average_grade');
            $table->bigInteger('id_user')->unsigned();
            $table->bigInteger('id_category')->unsigned();
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
        Schema::dropIfExists('places');
    }
}
