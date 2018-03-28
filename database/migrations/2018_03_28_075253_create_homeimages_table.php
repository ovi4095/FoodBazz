<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('homeslide1_img',100);
            $table->string('homeslide2_img',100);
            $table->string('homeslide3_img',100);
            $table->string('hotel_img',100);
            $table->string('rest_img',100);
            $table->string('visit_img',100);
            $table->string('blog_img',100);
            $table->string('forum_img',100);
            $table->string('gallery_img',100);
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
        Schema::dropIfExists('homeimages');
    }
}
