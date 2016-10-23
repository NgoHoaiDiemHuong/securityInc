<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('name',50);
            $table->date('birthday')->nullable();
            $table->string('email',50)->unique()->nullable();
            $table->string('phone_number',11);
            $table->string('address',100);
            $table->string('identity_card_number',10)->unique();
            $table->string('company',50)->nullable();
            $table->text('description',1000)->nullable();
            $table->string('keywords')->nullable();
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
        Schema::drop('customers');
    }
}
