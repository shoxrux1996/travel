<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_category', function (Blueprint $table) {
            $table->integer('tour_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['tour_id', 'category_id']);
            $table->foreign('tour_id')->references('id')->on('tours');
            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('tour_category');
    }
}
