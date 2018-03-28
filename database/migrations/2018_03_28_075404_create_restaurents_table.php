<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('restau_id',30);
            $table->string('restau_img',100);
            $table->string('restau_name',100)->unique();
            $table->mediumText('restau_detail',200);
            $table->string('rating',10);
            $table->dateTimeTz('date');
            $table->mediumText('rest_link',300);
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
        Schema::dropIfExists('restaurents');
    }
}
