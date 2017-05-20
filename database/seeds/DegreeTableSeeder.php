<?php

use Illuminate\Database\Seeder;
use App\Models\Degree;

class DegreeTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Degree::create( [
    'id'=>1,
    'name'=>'Elementary'
    ] );

    Degree::create( [
    'id'=>2,
    'name'=>'Secondary'
    ] );

    Degree::create( [
    'id'=>3,
    'name'=>'College'
    ] );

    Degree::create( [
    'id'=>4,
    'name'=>'Vocational'
    ] );

    Degree::create( [
    'id'=>5,
    'name'=>'Master'
    ] );

    Degree::create( [
    'id'=>6,
    'name'=>'Doctor'
    ] );
  }
}
