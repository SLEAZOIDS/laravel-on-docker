<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = ['name', 'tel', 'postal_code', 'address', 'access', 'business_day_of_the_week', 'business_time', 'budget_of_day', 'budget_of_night', 'number_of_sheets', 'has_pricate_room', 'can_smoking', 'etc'];

    public function tagRelations(){
      return $this->hasMany('App\TagRelation');
    }

}
