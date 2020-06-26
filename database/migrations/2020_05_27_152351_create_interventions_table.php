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
            $table->id();
            /*$table->unsignedBigInteger('id_building');
            $table->foreign('id_building')->references('id')->on('buildings')->onDelete('cascade');
            $table->unsignedBigInteger('id_demand');
            $table->foreign('id_demand')->references('id')->on('demands')->onDelete('cascade');*/
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
