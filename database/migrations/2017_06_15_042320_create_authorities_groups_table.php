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
      $table->integer('position_id')->unsigned()->index();
      $table->foreign('position_id')->references('id')->on('positions');
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
