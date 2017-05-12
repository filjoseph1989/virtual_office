<?php

use Illuminate\Support\Facades\Schema;
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
        $table->string('first_name');
        $table->string('last_name');
        $table->string('email')->unique();
        $table->string('password');
        $table->string('position')->nullable();
        $table->string('gender')->nullable();
        $table->date('birthday')->nullable();
        $table->string('street')->nullable();
        $table->integer('city')->nullable();
        $table->integer('country')->nullable();
        $table->char('zipcode', 4)->nullable();
        $table->char('contact', 12)->nullable();
        $table->char('tin', 15)->nullable();
        $table->char('sss', 15)->nullable();
        $table->char('philhealth', 15)->nullable();
        $table->char('pag_ibig', 15)->nullable();
        $table->string('profile_pic')->nullable();
        $table->integer('active')->defualt(0);
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
        Schema::dropIfExists('users');
    }
}
