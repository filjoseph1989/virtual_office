<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth:admin');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
    $username = Admin::find(1)->first_name;     
    return view('admins.admin-dashboard', compact('username'));
  }

  /**
   * Display the modules menu
   *
   * @return function view
   */
  public function showAdminModuleMenu()
  {
    $content = "admins.modules.module-menu";
    return view('admins.admin-dashboard', compact('content'));
  }
}
