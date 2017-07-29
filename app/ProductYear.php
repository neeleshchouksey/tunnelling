<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductYear extends Model
{
    //
    public function products()
    {
        return $this->hasMany('App\ProductYearRelation','year_id');
    }
}
