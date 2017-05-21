<?php

use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Position::create( [
    'id'=>1,
    'department_id'=>1,
    'name'=>'HR Personnel'
    ] );

    Position::create( [
    'id'=>2,
    'department_id'=>1,
    'name'=>'HR Assistant'
    ] );

    Position::create( [
    'id'=>3,
    'department_id'=>1,
    'name'=>'HR Officer'
    ] );

    Position::create( [
    'id'=>5,
    'department_id'=>8,
    'name'=>'Production Coordinator'
    ] );

    Position::create( [
    'id'=>6,
    'department_id'=>8,
    'name'=>'Designer'
    ] );

    Position::create( [
    'id'=>7,
    'department_id'=>8,
    'name'=>'Proofreading Team Leader'
    ] );

    Position::create( [
    'id'=>8,
    'department_id'=>8,
    'name'=>'Proofreader'
    ] );

    Position::create( [
    'id'=>9,
    'department_id'=>8,
    'name'=>'Customer Relation Management Team Leader'
    ] );

    Position::create( [
    'id'=>11,
    'department_id'=>8,
    'name'=>'Organizing Personnel'
    ] );

    Position::create( [
    'id'=>12,
    'department_id'=>10,
    'name'=>'DIS Supervisor'
    ] );

    Position::create( [
    'id'=>13,
    'department_id'=>10,
    'name'=>'DIS Personnel'
    ] );

    Position::create( [
    'id'=>15,
    'department_id'=>7,
    'name'=>'Photographer'
    ] );

    Position::create( [
    'id'=>16,
    'department_id'=>7,
    'name'=>'Retoucher'
    ] );

    Position::create( [
    'id'=>17,
    'department_id'=>7,
    'name'=>'Photography Manager'
    ] );

    Position::create( [
    'id'=>18,
    'department_id'=>1,
    'name'=>'HR Manager'
    ] );

    Position::create( [
    'id'=>19,
    'department_id'=>3,
    'name'=>'Book Development and Publishing Manager'
    ] );

    Position::create( [
    'id'=>20,
    'department_id'=>9,
    'name'=>'Sales and Marketing  Vice-President'
    ] );

    Position::create( [
    'id'=>21,
    'department_id'=>8,
    'name'=>'Graphics and Design Supervisor'
    ] );

    Position::create( [
    'id'=>22,
    'department_id'=>4,
    'name'=>'Corporate Supervisor'
    ] );

    Position::create( [
    'id'=>23,
    'department_id'=>9,
    'name'=>'Sales Supervisor'
    ] );

    Position::create( [
    'id'=>24,
    'department_id'=>4,
    'name'=>'Designer'
    ] );

    Position::create( [
    'id'=>25,
    'department_id'=>4,
    'name'=>'Corporate Assistant'
    ] );

    Position::create( [
    'id'=>26,
    'department_id'=>4,
    'name'=>'Customer Relation Management Officer'
    ] );

    Position::create( [
    'id'=>27,
    'department_id'=>8,
    'name'=>'Customer Relation Management Officer'
    ] );

    Position::create( [
    'id'=>28,
    'department_id'=>2,
    'name'=>'Accounting Manager'
    ] );
  }
}
