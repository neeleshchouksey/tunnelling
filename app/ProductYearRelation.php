<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductYearRelation extends Model
{
    //
    public function year()
    {
        return $this->belongsTo('App\ProductYear','year_id');
    }
    public function product()
    {
        return $this->belongsTo('App\Products','product_id');
    }
}
