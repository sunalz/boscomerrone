<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventphoto extends Model
{
    protected $fillable = array('eventpost_id', 'name');

    public function eventpost(){

      return $this->belongsTo('App\Eventpost');
    }
}
