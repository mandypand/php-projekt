<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_category', function (Blueprint $table) {
            $table->bigIncrements('movieCategoryId');
            $table->unsignedBigInteger('movieCategoryMId');
            $table->unsignedBigInteger('movieCategoryCId');
            $table->timestamps();
            
            
            $table->foreign('movieCategoryMId')->references('movieId')->on('movies')->onDelete('cascade');
            $table->foreign('movieCategoryCId')->references('categoryId')->on('category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_category');
    }
}
