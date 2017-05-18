<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'position_id', 'department_id', 'first_name', 'last_name', 'email', 'gender', 'birthday', 'street', 'city', 'country', 'zipcode', 'contact', 'tin', 'sss', 'philhealth', 'pag_ibig', 'profile_pic', 'active'
  ];

}
