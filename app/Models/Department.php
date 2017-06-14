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
   * Static way of getting department name
   *
   * Issue 31:
   *
   * @param  integer $id Department ID
   * @return
   */
  public static function getUserDepartmentName($id = 0)
  {
    $department = new Department();
    return $department->getDepartmentName($id);
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
