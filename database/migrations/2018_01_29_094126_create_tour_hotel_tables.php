<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourHotelTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_hotel', function (Blueprint $table) {
            $table->integer('tour_id')->unsigned();
            $table->integer('hotel_id')->unsigned();
            $table->primary(['tour_id', 'hotel_id']);
            $table->foreign('tour_id')->references('id')->on('tours');  
            $table->foreign('hotel_id')->references('id')->on('hotels');
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
        Schema::dropIfExists('tour_hotel');
    }
}
