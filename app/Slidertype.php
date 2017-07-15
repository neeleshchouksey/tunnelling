<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slidertype extends Model
{
    //
    public function slider()
    {
        return $this->hasMany('App\Slider','slider_type');
    }
}
