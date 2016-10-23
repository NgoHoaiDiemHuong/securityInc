<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_code',5)->unique();
            $table->string('name',50);
            $table->date('birthday')->nullable();
            $table->string('identity_card_number',10)->unique();   
            $table->string('phone_number',11);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('address',200);
            $table->tinyInteger('level');//cap nguoi dung(admin, quanly, nhan vien thuong).
            $table->string('keywords');
            $table->string('avatar')->nullable;   
            
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
