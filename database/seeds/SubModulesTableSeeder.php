<?php

use Illuminate\Database\Seeder;
use App\Models\SubModules;

class SubModulesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    SubModules::create( [
    'module_id'=>2,
    'name'=>'Organization Control',
    'route'=>'hr/organization_control'
    ] );

    SubModules::create( [
    'module_id'=>2,
    'name'=>'View Organization',
    'route'=>'hr/view_organization'
    ] );

    SubModules::create( [
    'module_id'=>4,
    'name'=>'Quotation',
    'route'=>'quotation/quotation'
    ] );

    SubModules::create( [
    'module_id'=>4,
    'name'=>'Account',
    'route'=>'quotation/account'
    ] );

    SubModules::create( [
    'module_id'=>4,
    'name'=>'Form',
    'route'=>'quotation/template'
    ] );

    SubModules::create( [
    'module_id'=>4,
    'name'=>'Job Order',
    'route'=>'jo/home'
    ] );

  }
}
