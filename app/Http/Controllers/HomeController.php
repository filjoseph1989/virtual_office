<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

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
  public function index() {
    $username = ucfirst(Auth::user()->first_name) . " " . ucfirst(Auth::user()->last_name);
    return view('users.user-dashboard', compact('username', 'lastname'));
  }


  public function showRecruitemeneMenu() {
    $content = "users.recruitment.recruitment-menu";

    return view('users.user-dashboard', compact('content'));
  }
}
