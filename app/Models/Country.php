<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
  /**
   * Return the country name
   *
   * @param  int $id Country ID
   * @return
   */
  public static function getCountryName($id)
  {
    return parent::find($id)->name;
  }
}
