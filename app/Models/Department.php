<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'color'
  ];

  /**
   * Return department name
   * @param  integer $id
   * @return string
   */
  public function getDepartmentName($id = 0)
  {
    return parent::find($id)->name;
  }

  /**
   * Check if the name exist
   * @param  string $name
   * @return
   */
  public function checkDepartmentName($name = "")
  {
    $department = new Department();
    return $department->select('*')
      ->where('name', '=', $name)
      ->exists();
  }
}
