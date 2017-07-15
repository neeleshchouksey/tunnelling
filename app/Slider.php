<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //
    public function type()
    {
        return $this->belongsTo('App\Slidertype','slider_type');
    }
}
