<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
  public function __construct() {
    $this->middleware('guest:admin');
  }

  /**
   * Display the login form for admin
   *
   * @return function view
   */
  public function showLoginForm()
  {
    return view('auth.admin-login');
  }

  /**
   * Serve the login request
   *
   * @param  Request $request
   * @return
   */
  public function login(Request $request)
  {
    $this->validate($request, [
      'email'    => 'required|email',
      'password' => 'required|min:6'
    ]);

    if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
      return redirect()->intended(route('admin'));
    }

    return redirect()->back()->withInput($request->only('email', 'remember'));
  }
}
