<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MediaPartner extends Model
{
    //
    public function addslider()
    {
        return $this->hasMany('App\MediaPartnerSlide','media_id');
    }

}
