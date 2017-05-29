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
  public function module_group() {
    return $this->hasMany('App\Models\ModuleGroup');
  }
}
