<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    protected $table = 'towns';
    function getCity(){
        return $this->hasOne('App\Models\City','id','city_id');
    }
}
