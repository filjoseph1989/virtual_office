<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

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
    $username = parent::getAdminName();
    return view('admins.admin-dashboard', compact('username'));
  }

  /**
   * Display the modules menu
   *
   * @return function view
   */
  public function showAdminModuleMenu()
  {
    $data = parent::getAdminDetails([
      'content' => "admins.modules.module-menu"
    ]);
    return view('admins.admin-dashboard', $data);
  }
}
