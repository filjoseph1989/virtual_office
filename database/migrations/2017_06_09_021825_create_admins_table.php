<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('admins', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('department_id')->unsigned()->index();
      $table->foreign('department_id')->references('id')->on('departments');
      $table->integer('position_id')->unsigned()->index();
      $table->foreign('position_id')->references('id')->on('positions');
      $table->string('first_name');
      $table->string('last_name');
      $table->string('email')->unique();
      $table->string('password');
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
      $table->integer('active')->default(1);
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
      //
  }
}
