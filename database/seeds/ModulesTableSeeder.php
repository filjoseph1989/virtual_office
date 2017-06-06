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
    \DB::table('modules')->insert(array (
      array('name' => 'Administration','icon' => 'fa fa-user-o','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'))),
      array('name' => 'Human Resources','icon' => 'fa fa-users','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Sales','icon' => 'fa fa-line-chart','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Accounting','icon' => 'fa fa-file-excel-o','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'))
    ));
  }
}
