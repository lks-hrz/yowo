<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("departure_airport", 3);
            $table->string("departure_time", 20);
            $table->string("arrival_airport", 3);
            $table->string("arrival_time", 20);
            $table->string("flightnumber")->default();
            $table->string("duration")->default();
            $table->integer("uid")->default();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
