<?php

use Illuminate\Database\Seeder;

class ModuleGroupsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('module_groups')->insert([
      array(
        'module_id'   => '2',
        'position_id' => '1',
        'created_at'  => date('Y-m-d H:i:s'),
        'updated_at'  => date('Y-m-d H:i:s')
      ),
      array(
        'module_id'   => '3',
        'position_id' => '1',
        'created_at'  => date('Y-m-d H:i:s'),
        'updated_at'  => date('Y-m-d H:i:s')
      )
    ]);
  }
}
