<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToCallRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('call_records', function (Blueprint $table) {
            $table->unsignedBigInteger('id_intervention');
            $table->foreign('id_intervention')->references('id')->on('interventions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('call_records', function (Blueprint $table) {
            //
        });
    }
}
