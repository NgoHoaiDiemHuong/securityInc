<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');           
            $table->string('service_code',3);
            $table->foreign('service_code')->references('service_code')->on('services')->onDelete('cascade');
            $table->string('user_code',5);//nhan vien nao tao don dat hang
            $table->foreign('user_code')->references('user_code')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('customer_code')->unsigned();//don hang cua khach hang nao
            $table->foreign('customer_code')->references('id')->on('customers')->onDelete('cascade');
            $table->date('order_date');//ngay dat hang
            $table->text('description')->nullable();
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
        Schema::drop('orders');
    }
}
