<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackerLog extends Model
{
   protected $table = "tracker_log";
   public function paths()
   {
   		return $this->belongsTo('App\TrackerPaths','path_id');
   }
   public function session()
   {
   		return $this->belongsTo('App\TrackerSession','session_id');
   }
}
