<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceServiceTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_service_time', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_code',3);
            $table->foreign('service_code')->references('service_code')->on('services')->onDelete('cascade');
            $table->integer('price_service')->unsigned();
            $table->foreign('price_service')->references('id')->on('prices')->onDelete('cascade');
            $table->date('start_date');
            $table->date('finish_date')->nullable();
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
        Schema::drop('time');
    }
}
