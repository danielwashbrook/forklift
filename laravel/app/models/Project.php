<?php

class Project extends \Eloquent {
	protected $fillable = [];

  public function project() {
    return $this->belongsTo('Project', 'project_id');
  }

  public function features() {
    return $this->hasMany('Feature', 'project_id');
  }
}