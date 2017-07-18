<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    
    public function advertise()
    {
        return $this->hasOne('App\Advertise','product_id');
    }
}
