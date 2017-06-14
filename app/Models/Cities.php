<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{

  /**
   * Return the name of the city
   *
   * @param  int $id City ID
   * @return
   */
  public static function getCityName($id)
  {
    return parent::find($id)->name;
  }
}
