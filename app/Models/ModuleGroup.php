<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
   * Defines the relationship between position
   *
   * @return
   */
  public function position() {
    return $this->belongsTo('App\Models\Position');
  }

  /**
   * Define relationship between module
   *
   * @return [type] [description]
   */
  public function module() {
    return $this->belongsTo('App\Models\Module');
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
