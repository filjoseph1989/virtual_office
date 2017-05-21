<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $username = ucfirst(Auth::user()->first_name);
    return view('users.user-dashboard', compact('username'));
  }

  /**
   * display the recruitment menu
   *
   * @return \Illuminate\Http\Response
   */
  public function showRecruitemeneMenu()
  {
    $content = "users.recruitment.recruitment-menu";
    return view('users.user-dashboard', compact('content'));
  }
}
