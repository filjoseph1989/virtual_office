<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\SubModules;
use Illuminate\Http\Request;

class AdminSubModulesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($id)
  {
    $submodules = SubModules::where('module_id', $id)->get();
    $content    = "admins.modules.submodule-table";

    return view('admins.admin-dashboard', compact('content', 'submodules'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $module  = Module::all();
    $content = "admins.modules.submodule-add";
    return view('admins.admin-dashboard', compact('content', 'module'));
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

    return redirect()->route('admin.submodules.add')->with('status', 'Successfuly added new sub-module');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function showAllSubModules()
  {
    
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
