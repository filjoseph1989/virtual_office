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
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showAllSubModules()
  {
    $subModules = SubModules::all();
    $content    = "admins.modules.submodule-table-all";
    return view('admins.admin-dashboard', compact('content', 'subModules'));
  }

  /**
   * Display the table of sub-module
   *
   * @param  int $id Module ID
   * @return \Illuminate\Http\Response
   */
  public function showSubModuleList($id)
  {
    $submodules    = SubModules::where('module_id', $id)->get();
    $position      = Position::all();
    $module        = Module::find($id);
    $position_name = $module->module_group()
      ->select('positions.id', 'positions.name')
      ->join('positions', 'positions.id','=','module_groups.position_id')
      ->where('module_id', $id)
      ->get();

    $content = "admins.modules.submodule-table";
    return view('admins.admin-dashboard', compact('content', 'position_name', 'module', 'position', 'submodules'));
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
