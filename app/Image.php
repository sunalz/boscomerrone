<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
