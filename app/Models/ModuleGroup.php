<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class ModuleGroup extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'module_id', 'position_id'
  ];

  /**
   * Defines the relationship between position
   *
   * @return
   */
  public function position()
  {
    return $this->belongsTo('App\Models\Position');
  }

  /**
   * Define relationship between module
   *
   * @return [type] [description]
   */
  public function module()
  {
    return $this->belongsTo('App\Models\Module');
  }

  /**
   * Store positions
   *
   * @param  int $module_id
   * @param  array  $position_id
   * @return boolean
   */
  public function store($module_id, $position_id = [])
  {
    return parent::insert(
      self::buildCreate($module_id, $position_id)
    );
  }

  /**
   * Return sidebar details
   *
   * @param  integer $positionId
   * @return
   */
  public function getSidebarDetails($positionId = 0)
  {
    $modules    = self::getModules($positionId);
    $subModules = self::getSubModules($positionId);

    return [
      'modules'    => $modules,
      'subModules' => $subModules
    ];
  }

  /**
   * Return the list of module base of user position
   *
   * @return array
   */
  private function getModules($positionId = 0)
  {
    $ModuleGroup = new ModuleGroup();
    return $ModuleGroup
      ->select('modules.id', 'modules.name as module_name', 'modules.icon as module_icon')
      ->join('modules', 'modules.id', '=', 'module_groups.module_id')
      ->where('module_groups.position_id', '=', $positionId)
      ->get();
  }

  /**
   * Return Sidebar details
   *
   * @param  integer $positionId
   * @return array
   */
  private function getSubModules($positionId = 0)
  {
    # Issue 3: Improve this using laravel way or eloquent way
    $module = new ModuleGroup();
    return $module
      ->select('module_groups.module_id as mid', 'sub_modules.id as sid', 'sub_modules.name as name', 'sub_modules.route as route')
      ->join('modules', 'modules.id', '=', 'module_groups.module_id')
      ->join('sub_modules', 'sub_modules.module_id', '=', 'modules.id')
      ->join('positions', 'positions.id', '=', 'module_groups.position_id')
      ->where('module_groups.position_id', '=', $positionId)
      ->get();
  }

  /**
   * Build an array to be used by store method
   *
   * @param  int $module_id
   * @param  array  $position_id
   * @return array
   */
  private function buildCreate($module_id, $position_id = [])
  {
    $create = array();
    foreach ($position_id as $key => $value) {
      $create[$key]['module_id']   = (int)$module_id;
      $create[$key]['position_id'] = (int)$value;
      $create[$key]['created_at']  = date('Y-m-d H:i:s');
      $create[$key]['updated_at']  = date('Y-m-d H:i:s');
    }

    return $create;
  }
}
