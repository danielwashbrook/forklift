<?php

class Attachment extends \Eloquent {
	protected $fillable = [];

  public function detail() {
    return $this->belongsTo('Detail', 'detail_id');
  }
}