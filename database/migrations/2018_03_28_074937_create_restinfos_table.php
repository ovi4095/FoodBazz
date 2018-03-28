<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slide1_img',100);
            $table->string('slide2_img',100);
            $table->string('slide3_img',100);
            $table->string('manu1_img',100);
            $table->string('manu2_img',100);
            $table->string('review1_img',100);
            $table->string('review2_img',100);
            $table->string('review3_img',100);
            $table->string('review4_img',100);
            $table->string('review5_img',100);
            $table->string('review6_img',100);
            $table->string('review7_img',100);
            $table->string('review8_img',100);
            $table->string('review9_img',100);
            $table->string('review10_img',100);
            $table->string('fool_rating',100);
            $table->string('service_rating',100);
            $table->string('valuerat_rating',100);
            $table->string('atmosphere_rating',100);
            $table->mediumText('address',500);
            $table->string('map_img',100);
            $table->string('map_url',100);
            $table->string('contact_number',100);
            $table->string('fb_link',100);
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
        Schema::dropIfExists('restinfos');
    }
}
