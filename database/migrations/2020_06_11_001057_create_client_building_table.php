<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_building', function (Blueprint $table) {
            $table->id();
            $table->integer('id_client')->unsigned();
            $table->foreign('id_client')->references('id_client')->on('clients');
            $table->integer('id_building')->unsigned();
            $table->foreign('id_building')->references('id_building')->on('buildings');
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
        Schema::dropIfExists('client_building');
    }
}
