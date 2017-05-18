<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'position_id', 'department_id', 'first_name', 'last_name', 'email', 'password', 'gender', 'birthday', 'street', 'city', 'country', 'zipcode', 'contact', 'tin', 'sss', 'philhealth', 'pag_ibig'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];
}
