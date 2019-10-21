<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('places', function (Blueprint $table) {
            //onDelete : restrict : si utilisateur supprimé, lieu gardé. Cascade : tout supprimé
            $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('id_city')->references('id')->on('cities')->onDelete('restrict');
            $table->foreign('id_department')->references('id')->on('departments')->onDelete('restrict');
            $table->foreign('id_region')->references('id')->on('regions')->onDelete('restrict');
            $table->foreign('id_category')->references('id')->on('categories')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('places', function (Blueprint $table) {
            //
        });
    }
}
