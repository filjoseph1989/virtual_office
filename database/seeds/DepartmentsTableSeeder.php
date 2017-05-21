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
    Department::create( [
    'id'=>1,
    'name'=>'Human Resource Department',
    'color'=>''
    ] );

    Department::create( [
    'id'=>2,
    'name'=>'Accounting Department',
    'color'=>''
    ] );

    Department::create( [
    'id'=>3,
    'name'=>'Book Development',
    'color'=>''
    ] );

    Department::create( [
    'id'=>4,
    'name'=>'Corporate Division',
    'color'=>''
    ] );

    Department::create( [
    'id'=>7,
    'name'=>'Photography Department',
    'color'=>''
    ] );

    Department::create( [
    'id'=>8,
    'name'=>'Pre-Press Department',
    'color'=>''
    ] );

    Department::create( [
    'id'=>9,
    'name'=>'CRM/Sales/Shipping and Delivery',
    'color'=>''
    ] );

    Department::create( [
    'id'=>10,
    'name'=>'Digital Imaging Section',
    'color'=>''
    ] );  }
}
