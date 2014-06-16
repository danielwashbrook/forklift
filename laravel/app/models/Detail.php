<?php

class Detail extends \Eloquent {
	protected $fillable = [];

  public function feature() {
    return $this->belongsTo('Feature', 'feature_id');
  }

  public function tasks() {
    return $this->hasMany('Task', 'detail_id');
  }
  public function attachments() {
    return $this->hasMany('Attachment', 'detail_id');
  }
}