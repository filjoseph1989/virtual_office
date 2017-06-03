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
      array('id' => '1','module_id' => '2','name' => 'Recruitment','route' => 'recruitment','created_at' => '2017-05-31 04:04:33','updated_at' => '2017-05-31 04:04:33'),
      array('id' => '2','module_id' => '2','name' => 'Payroll','route' => 'recruitment','created_at' => '2017-05-31 04:04:33','updated_at' => '2017-05-31 04:04:33'),
      array('id' => '3','module_id' => '2','name' => 'Trainings','route' => 'recruitment','created_at' => '2017-05-31 04:04:33','updated_at' => '2017-05-31 04:04:33'),
      array('id' => '4','module_id' => '2','name' => 'Administration','route' => 'recruitment','created_at' => '2017-05-31 04:04:33','updated_at' => '2017-05-31 04:04:33'),
      array('id' => '5','module_id' => '2','name' => 'Communication','route' => 'recruitment','created_at' => '2017-05-31 04:04:33','updated_at' => '2017-05-31 04:04:33')
    ));
  }
}
