<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubModules extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'module_id', 'name', 'route'
  ];
}
