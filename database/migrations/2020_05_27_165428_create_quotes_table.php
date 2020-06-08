<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id_quote');
            $table->integer('id_demand')->unsigned();
            $table->foreign('id_demand')->references('id_demand')->on('demands');
            $table->integer('id_building')->unsigned();
            $table->foreign('id_building')->references('id_building')->on('buildings');
            $table->double('quote');
            $table->string('title_quote');
            $table->date('date_quote');
            $table->double('amountHT');
            $table->double('amountTTC');
            $table->string('status_quote');
            $table->string('location_quote');
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
        Schema::dropIfExists('quotes');
    }
}
