<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_places', function (Blueprint $table) {
            //unsigned : sur un integer, prends les positifs ET les négatifs
            $table->bigIncrements('id');
            $table->bigInteger('id_tag')->unsigned();
            $table->bigInteger('id_place')->unsigned();
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
        Schema::dropIfExists('tag_places');
    }
}
