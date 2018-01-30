<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id', 'store_id', 'number_of_guests',
        'date_time', 'name', 'email', 'tel', 'use_scene', 'etc'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function store(){
        return $this->belongsTo('App\Store');
    }

}
