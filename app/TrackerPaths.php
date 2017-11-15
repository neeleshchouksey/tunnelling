<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackerPaths extends Model
{
    //
    public function logs()
   {
   		return $this->hasMany('App\TrackerLog','path_id');
   }
}
