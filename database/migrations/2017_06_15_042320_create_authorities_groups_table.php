<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthoritiesGroupsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('authority_groups', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->unsigned()->index();
      $table->foreign('user_id')->references('id')->on('users');
      $table->integer('authority_id')->unsigned()->index();
      $table->foreign('authority_id')->references('id')->on('authorities');
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
