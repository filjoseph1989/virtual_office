<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('admins')->insert([
      'position_id'   => 1,
      'department_id' => 1,
      'first_name'    => 'admin',
      'last_name'     => 'admin',
      'email'         => 'admin@email.com',
      'password'      => bcrypt('password'),
      'gender'        => 'male',
      'birthday'      => date("Y-m-d H:i:s"),
      'street'        => 'street',
      'city'          => 1,
      'country'       => 1,
      'zipcode'       => '8000',
      'contact'       => '09121234567',
      'tin'           => '123456789',
      'sss'           => '123456789',
      'philhealth'    => '123456789',
      'pag_ibig'      => '123456789',
      'pag_ibig'      => '',
      'created_at'    => date('Y-m-d H:i:s'),
      'updated_at'    => date('Y-m-d H:i:s')
    ]);
  }
}
