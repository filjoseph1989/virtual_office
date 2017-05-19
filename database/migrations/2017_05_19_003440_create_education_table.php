<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('education', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->default(0);
      $table->integer('degree_id')->default(0);
      $table->integer('course_id')->default(0);
      $table->string('school')->nullable();
      $table->integer('street')->nullable();
      $table->integer('city')->nullable();
      $table->integer('country')->nullable();
      $table->date('graduated_at')->default(date("Y-m-d H:i:s"));
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
      Schema::dropIfExists('education');
  }
}
