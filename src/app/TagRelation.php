<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagRelation extends Model
{
    public function tag(){
      return $this->belongsTo('App\Tag');
    }
}
