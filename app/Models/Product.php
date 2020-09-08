<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static where(string $string, $id)
 */
class Product extends Model
{

    function getCategory(){
        return $this->hasOne('App\Models\Category','id','category_id');
    }
    function getUser(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
