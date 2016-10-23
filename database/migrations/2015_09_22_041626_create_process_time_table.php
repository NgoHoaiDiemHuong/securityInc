<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processTimes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_code',3);
            $table->foreign('service_code')->references('service_code')->on('services')->onDelete('cascade');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('customers')->onDelete('cascade');
            $table->date('start_date');
            $table->date('finish_date');
            $table->time('start_hour');
            $table->time('finis_hour');
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
        Schema::drop('processTimes');
    }
}
