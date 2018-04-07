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
            $table->string('restau_name',100);
            $table->text('slide1_img');
            $table->text('slide2_img');
            $table->text('slide3_img');
            $table->text('manu_img');
            $table->text('review_img');
            $table->text('address');
            $table->text('map_img');
            $table->text('map_url');
            $table->integer('contact_number');
            $table->text('fb_link');
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
