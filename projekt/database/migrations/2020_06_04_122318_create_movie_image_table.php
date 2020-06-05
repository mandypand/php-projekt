<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovieImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_image', function (Blueprint $table) {
            $table->bigIncrements('movieImageId');
            $table->unsignedBigInteger('movieImageMId');
            $table->unsignedBigInteger('movieImageIId');
            $table->timestamps();

            $table->foreign('movieImageMId')->references('movieId')->on('movies')->onDelete('cascade');
            $table->foreign('movieImageIId')->references('imageId')->on('image')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_image');
    }
}
