<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use App\Page;
use App\Partner;
use App\Keyreader;
use App\Advertiser;
use App\Companyinfo;
use App\Slidertype;
use App\Advertise;
use App\Contact;
use App\Subscribe;
use Tracker;
class Helpers
{
    public static function pages()
    {
        return $pages = Page::all();
    }

    public static function partner()
    {
        return $partner = Partner::all();
    }
    public static function keyreader()
    {
        return $keyreader = Keyreader::all();
    }
    public static function advertiser()
    {
        return $advertiser = Advertiser::all();
    }
    public static function companyinfo()
    {
        return $companyinfo = Companyinfo::first();
    }
    public static function slidertype()
    {
        return $slidertype = Slidertype::all();
    }
    public static function advertise()
    {
        return $advertise = Advertise::all();
    }
   
    public static function contact()
    {
        return $contact = Contact::all();
    }
    public static function subscriptions()
    {
        return $subscribe = Subscribe::all();
    }
    public static function uniqueVisitors(){
        return Tracker::logByRouteName('//')
        
        ->select('tracker_log.session_id')
        ->groupBy('tracker_log.session_id')
        ->distinct()
        ->count('tracker_log.session_id');
    }
  
  
}