<?php

class Feature extends \Eloquent {
	protected $fillable = [];

  public function details() {
    return $this->hasMany('Detail', 'feature_id');
  }

  public function estimates() {
    return $this->hasMany('Estimate', 'feature_id');
  }
}