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
    \DB::table('sub_modules')->insert(array (
      array('module_id' => '2','name' => 'Recruitment','route' => 'recruitment','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('module_id' => '2','name' => 'Payroll','route' => 'recruitment','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('module_id' => '2','name' => 'Trainings','route' => 'recruitment','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('module_id' => '2','name' => 'Administration','route' => 'recruitment','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('module_id' => '2','name' => 'Communication','route' => 'recruitment','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'))
    ));
  }
}
