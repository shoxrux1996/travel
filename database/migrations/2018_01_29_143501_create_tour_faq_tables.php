<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourFaqTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_faq', function (Blueprint $table) {
            $table->integer('tour_id')->unsigned();
            $table->integer('faq_id')->unsigned();
            $table->primary(['tour_id', 'faq_id']);
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');  
            $table->foreign('faq_id')->references('id')->on('faqs')->onDelete('cascade');
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
        Schema::dropIfExists('tour_faq');
    }
}
