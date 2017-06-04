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
    $data = parent::getDetails([
      'content' => 'users.recruitment.position-add'
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
    Position::create($request->only(['name']));
    return redirect()->route('recruitment.add.position')->with('status', 'Successfuly added new Position');
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
