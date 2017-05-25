<?php

namespace App\Http\Controllers;

use App\Models\Position;
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
    $content = 'users.recruitment.position-add';
    return view('users.user-dashboard', compact('content'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Position::create($request->only(['name']));
    return redirect()->route('recruitment.add.position')->with('status', 'Successfuly added new Position');
  }

  /**
   * Display all position
   * @return [type] [description]
   */
  public function showPositionList($content = "", $view = "users.user-dashboard")
  {
    $position = Position::all();
    $content  = ($content == "")
      ? 'users.recruitment.position-table'
      : $content;

    return view($view, compact('content', 'position'));
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
