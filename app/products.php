<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    public function advertise()
    {
        return $this->hasOne('App\Advertise','product_id');
    }
    public function years()
    {
        return $this->hasMany('App\ProductYearRelation','product_id');
    }
}
