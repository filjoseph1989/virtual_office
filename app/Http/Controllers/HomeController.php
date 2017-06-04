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
    if (Auth::check() === false) {
      return view('auth.user-login');
    } else {
      $data = parent::getHomeDetails();
      return view('users.user-dashboard', $data);
    }
  }

  /**
   * Display the home page
   *
   * @return \Illuminate\Http\Response
   */
  public function home()
  {
    $data = parent::getHomeDetails();
    return view('users.user-dashboard', $data);
  }

  /**
   * display the recruitment menu
   *
   * @return \Illuminate\Http\Response
   */
  public function showRecruitemeneMenu()
  {
    $data = parent::getHomeDetails([
      'content' => 'users.recruitment.recruitment-menu'
    ]);
    return view('users.user-dashboard', $data);
  }
}
