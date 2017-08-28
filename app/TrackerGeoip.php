<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackerGeoip extends Model
{
    //
    protected $table = 'tracker_geoip';
    public function trackersesion(){
    	 return $this->hasMany('App\TrackerSession','geoip_id');
    }
}
