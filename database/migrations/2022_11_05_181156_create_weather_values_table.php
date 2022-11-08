<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('station');
            $table->foreign('station')->references('id')->on('stations');
            $table->string('variable', 20);
            $table->string('value', 15);
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
        Schema::dropIfExists('weather_values');
    }
}
