<?php

use Illuminate\Database\Seeder;
use App\Models\Module;

class ModulesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Module::create( [
    'name'=>'Administration'
    ] );

    Module::create( [
    'name'=>'Human Resources'
    ] );

    Module::create( [
    'name'=>'Accounting'
    ] );

    Module::create( [
    'name'=>'Sales'
    ] );

    Module::create( [
    'name'=>'MIS Tool'
    ] );

    Module::create( [
    'name'=>'Module'
    ] );
  }
}
