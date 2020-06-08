<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->increments('id_intervention');
            $table->integer('id_building')->unsigned();
            $table->foreign('id_building')->references('id_building')->on('buildings');
            $table->integer('id_demand')->unsigned();
            $table->foreign('id_demand')->references('id_demand')->on('demands');
            $table->string('interventionRef');
            $table->string('type_intervention');
            $table->date('startDate');
            $table->time('startTime');
            $table->date('desiredDate');
            $table->time('desiredTime');
            $table->time('endTime');
            $table->string('status_intervention');
            $table->string('reason');
            $table->text('commentary');
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
        Schema::dropIfExists('interventions');
    }
}
