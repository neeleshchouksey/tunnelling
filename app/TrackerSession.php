<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackerSession extends Model
{
    //
    public function geolocation(){
    	 return $this->belongsTo('App\TrackerGeoip','geoip_id');
    }
}
