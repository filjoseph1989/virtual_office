<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $this->call(DepartmentsTableSeeder::class);
    $this->call(PositionsTableSeeder::class);
    $this->call(CountryTableSeeder::class);
    $this->call(ProvincesTableSeeder::class);
    $this->call(CitiesTableSeeder::class);
    $this->call(CourseTableSeeder::class);
    $this->call(DegreeTableSeeder::class);
    $this->call(ModulesTableSeeder::class);
    $this->call(SubModulesTableSeeder::class);
    $this->call(ModuleGroupsSeeder::class);
    $this->call(UserTableSeeder::class);
    $this->call(AdminTableSeeder::class);
    $this->call(AuthoritiesTableSeeder::class);
  }
}
