<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EmployeeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $rules = array('email' => 'unique:users,email');

    $validator = Validator::make($request->email, $rules);

    if ($validator->fails()) {
      return redirect()->route('recruitement.add')->with('status', 'That email address is already registered. You sure you don\'t have an account?');
    }
    else {
      return redirect()->route('recruitement.add')->with('status', 'Successfuly added new employee');
    }

  }
  public function _store(Request $request)
  {
    $result = $request->only(['position_id', 'department_id', 'first_name', 'last_name', 'email', 'gender', 'birthday', 'street', 'city', 'country', 'zipcode', 'contact', 'tin', 'sss', 'philhealth', 'pag_ibig']);
    $result['password'] = bcrypt('password');

    User::create($result);

    return redirect()->route('recruitement.add')->with('status', 'Successfuly added new employee');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for adding new employee
   *
   * @return \Illuminate\Http\Response
   */
  public function showAddForm() {
    $content = "users.recruitement.add";

    return view('users.user-dashboard', compact('content'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }
}
