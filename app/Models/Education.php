<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id', 'degree_id', 'course_id', 'school', 'street', 'city', 'country', 'graduated_at'
  ];

  /**
   * Return a row of a education information
   *
   * @param  int $id user_id
   * @return
   */
  public static function getEducation($id) {
    $education = new Education();
    return $education->select('*')
      ->where('user_id', '=', $id)
      ->get();
  }
}
