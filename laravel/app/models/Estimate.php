<?php

class Estimate extends \Eloquent {
	protected $fillable = [];

  public function feature() {
    return $this->belongsTo('Feature', 'feature_id');
  }
}