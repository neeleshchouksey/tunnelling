<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advertise extends Model
{
    //
    public function product()
    {
        return $this->belongsTo('App\Products','product_id');
    }
}
