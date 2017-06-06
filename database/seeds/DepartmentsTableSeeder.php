<?php

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('departments')->insert([
      array('name' => 'Human Resource Department','color' => 'Red','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Accounting Department','color' => 'Green','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Book Development','color' => 'Pink','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Corporate Division','color' => 'Brown','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Photography Department','color' => 'Yellow','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Pre-Press Department','color' => 'Orange','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'CRM/Sales/Shipping and Delivery','color' => 'Black','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Digital Imaging Section','color' => 'Red','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s')),
      array('name' => 'Photography Department','color' => 'Blue','created_at' => date('Y-m-d H:i:s'),'updated_at' => date('Y-m-d H:i:s'))
    ]);
  }
}
