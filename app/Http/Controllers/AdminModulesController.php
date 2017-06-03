<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\SubModules;
use Illuminate\Http\Request;

class AdminModulesController extends Controller
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
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    parent::getSidebarDetails();

    $module     = Module::all();
    $subModules = SubModules::all();
    $content    = 'admins.modules.module-table';

    return view('admins.admin-dashboard', compact('module', 'content', 'subModules'));
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
   * Store new module
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function storeNewModule(Request $request)
  {
    $data = $request->only(['name']);
    Module::create($data);
    return redirect()->route('admin.modules.list')->with('status', 'Successfuly added new module');
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
