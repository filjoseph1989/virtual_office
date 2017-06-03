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
      $data = self::getHomeDetails();
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
    $compact  = self::getHomeDetails();
    return view('users.user-dashboard', compact($compact));
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

  /**
   * Return the Home page details
   *
   * @return \Illuminate\Http\Response
   */
  private function getHomeDetails()
  {
    $sidebar  = parent::getSidebarDetails();
    $username = parent::getUserName();
    extract($sidebar);

    $compact  = array('modules', 'subModules', 'username');
    return compact($compact);
  }
}
