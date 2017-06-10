<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\Department;
use Illuminate\Http\Request;

class PositionController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $data = parent::getDetails([
      'content' => 'users.recruitment.position-add'
    ]);
    return view('users.user-dashboard', $data);
  }

  /**
   * display the form to add new position from the
   * given department ID
   *
   * @param  int $id
   * @return \Illuminate\Http\Response
   */
  public function indexModal($id)
  {
    $department = new Department();
    $data       = parent::getDetails([
      'department_id'   => $id,
      'department_name' => $department->getDepartmentName($id),
      'content'         => 'users.recruitment.position-add-modal'
    ]);
    return view('users.user-dashboard', $data);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    if (! Position::where('name', '=', $request->name)->exists()) {
      Position::create($request->only(['department_id', 'name']));
      $status = 'Successfuly added new Position';
    }

    return redirect()
      ->route('recruitment.add.position.modal', $request->only(['department_id']))
      ->with([
        'status'          => isset($status) ? $status: 'Failed, The position name already exist',
        'warning'         => isset($status) ? true :  false,
        'department_name' => Department::find($request->only(['department_id']))[0]->name
      ]);
  }

  /**
   * Display all position
   * @return [type] [description]
   */
  public function showPositionList($content = "", $view = "users.user-dashboard")
  {
    $content  = ($content == "")
      ? 'users.recruitment.position-table'
      : $content;

    $data = parent::getAdminDetails([
      'position' => Position::all(),
      'content'  => $content
    ]);

    return view($view, $data);
  }

  /**
   * Display position in admin dashboard
   *
   * @return \Illuminate\Http\Response
   */
  public function showAdminPositionList()
  {
    return self::showPositionList('admins.modules.position-table', 'admins.admin-dashboard');
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
   * Delete the position from the database
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy(Request $request)
  {
    $position = Position::find($request->id);
    if ($position->delete()) {
      $message['delete_result'] = true;
      $message['position_data'] = Position::all();
      echo json_encode($message);
    }
  }

  public function autocomplete(Request $request)
  {
    $term = $request->tags;
    $data   = Position::where('name','LIKE','%'.$term.'%')->take(10)->get();
    $result = array();

    foreach ($data as $key => $value) {
      $result[] = ['value' => $value->name];
    }
    return response()->json($results);
  }

}
