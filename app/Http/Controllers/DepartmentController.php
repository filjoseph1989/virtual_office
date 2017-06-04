<?php

namespace App\Http\Controllers;

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
    Department::create($request->only(['name', 'color']));
    return redirect()->route('recruitment.add.department')->with('status', 'Successfuly added new Department');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showAddDepartmentForm()
  {
    $data = parent::getHomeDetails([
      'content' => 'users.recruitment.department-add'
    ]);
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
  public function edit($id)
  {
      //
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
