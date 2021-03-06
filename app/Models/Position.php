<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'department_id', 'name'
  ];

  /**
   * Defines the relationship between module_group
   *
   * @return
   */
  public function module_group()
  {
    return $this->hasMany('App\Models\ModuleGroup');
  }

  /**
   * Return position list base on given department ID
   *
   * @param  integer $id
   * @return json
   */
  public function getPositionByDepartment($id = 0, $array = false)
  {
    $position = new Position();
    $result   = $position->select('*')
      ->where('department_id', '=', $id)
      ->get();

    return ($array === true) ? $result->toArray() : $result->toJson();
  }

  /**
   * Return the position name of the user from the given ID
   *
   * @param  int $id position ID
   * @return string
   */
  public static function getUserPosition($id)
  {
    return parent::find($id)->name;
  }

}
