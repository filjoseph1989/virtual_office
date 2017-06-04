<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Position;
use App\Models\SubModules;
use App\Models\ModuleGroup;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminSubModulesController extends Controller
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
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $data = $request->only('module_id', 'name', 'route');
    SubModules::create($data);

    return redirect()
      ->route('admin.submodules.list', $request->module_id)
      ->with('status', 'Successfuly added new sub-module');
  }

  /**
   * Display the table of sub-module
   *
   * Issue 2: Go to this line and optimize this function
   * @param  int $id Module ID
   * @return \Illuminate\Http\Response
   */
  public function showSubModuleList($id)
  {
    # Issue 1: transfer this to mudule model class
    $module        = Module::find($id);
    $position_name = $module->module_group()
      ->select('positions.id', 'positions.name')
      ->join('positions', 'positions.id','=','module_groups.position_id')
      ->where('module_id', $id)
      ->get();


    $data = parent::getAdminDetails([
      'position_name' => $position_name,
      'position'      => Position::all(),
      'submodules'    => SubModules::where('module_id', $id)->get(),
      'content'       => "admins.modules.submodule-table"
    ]);
    $data['module'] = $module;

    return view('admins.admin-dashboard', $data);
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
