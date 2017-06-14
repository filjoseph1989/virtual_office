<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id', 'first_name', 'last_name', 'contact', 'relationship'
  ];

  /**
   * Return a row of a familt information
   *
   * @param  int $id user_id
   * @return
   */
  public static function getFamily($id) {
    $family = new Family();
    return $family->select('*')
      ->where('user_id', '=', $id)
      ->get();
  }
}
