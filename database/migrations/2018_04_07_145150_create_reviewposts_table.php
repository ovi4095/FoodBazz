<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('restaurent_name',100);
            $table->string('food_name',100);
            $table->string('description',100);
            $table->text('food_img');
            $table->integer('food_rating');
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
        Schema::dropIfExists('reviewposts');
    }
}
