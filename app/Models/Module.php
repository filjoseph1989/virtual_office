<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name','icon'
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
}
