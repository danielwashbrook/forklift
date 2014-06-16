<?php

class Feature extends \Eloquent {
	protected $fillable = [];

  public static $rules = array(
    'parent_id' => 'required',
    'project_id' => 'required',
    'status' => '',
    'visible' => 'required',
    'exportable' => 'required',
    'working_number' => 'required',
    'title' => 'required',
  );

  public function details() {
    return $this->hasMany('Detail', 'feature_id');
  }

  public function estimates() {
    return $this->hasMany('Estimate', 'feature_id');
  }
}