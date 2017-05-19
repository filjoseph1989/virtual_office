<?php

namespace App;

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
}
