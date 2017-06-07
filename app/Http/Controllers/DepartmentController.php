<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Position;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index() {
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
    # Issue 7: Go to this line because I dont know how to this correctly
    // $rules = [
    //   'name' => 'required|unique:name|max:255',
    // ];
    //
    // $validator = Validator::make($request->all(), $rules);
    //
    // if ($validator->fails()) {
    //   return Redirect::to('recruitment.list.department')
    //     ->withErrors($validator)
    //     ->withInput();
    // }

    Department::create($request->only(['name', 'color']));
    return redirect()->route('recruitment.list.department')
      ->with('status', 'Successfuly added new Department');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showAddDepartmentForm($modal = "")
  {
    $data = parent::getHomeDetails([
      'content' => 'users.recruitment.department-add'
    ]);

    # Diri ko nag stop, mali ang route sa submit
    if ($modal == "modal") {
      return redirect()
        ->route('recruitment.list.department')
        ->with('status', 'Successfuly added new Department');
    }

    return view('users.user-dashboard', $data);
  }

  /**
   * Used to display the list of departments
   *
   * @return \Illuminate\Http\Response
   */
  public function showDepartmentList()
  {
    $data = parent::getDetails([
      'department' => Department::all(),
      'content'    => 'users.recruitment.department-table'
    ]);

    return view('users.user-dashboard', $data);
  }

  /**
   * Used by Ajax call
   * @param  integer $id [description]
   * @return [type]      [description]
   */
  public function getPositonByDepartment(Request $request)
  {
    $position = new Position();
    echo $position->getPositionByDepartment($request->id);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Request $request)
  { }

  /**
   * Update the specified resource in storage.
   * Please refer to this tutorial
   * https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers
   * for better way of doing edit functionality in laravel
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request)
  {
    $data           = $request->only(['id', 'name']);
    $position       = Position::find($data['id']);
    $position->name = $data['name'];
    if ($position->save()) {
      $message['data'] = true;
      echo json_encode($message);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request)
  {
    $position = Position::find($request->id);
    if ($position->delete()) {
      $message['data'] = true;
      echo json_encode($message);
    }
  }
}
