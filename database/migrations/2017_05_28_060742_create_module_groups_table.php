<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleGroupsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('module_groups', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('module_id')->unsigned()->nullable();
      $table->integer('position_id')->unsigned()->nullable();
      $table->foreign('module_id')->references('id')->on('modules');
      $table->foreign('position_id')->references('id')->on('positions');
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
    Schema::dropIfExists('module_groups');
  }
}
