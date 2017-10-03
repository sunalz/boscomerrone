<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventpost extends Model
{
    protected $fillable = array('title', 'description');

    public function eventphotos(){
      return $this->hasMany('App\Eventphoto');

    }
}
