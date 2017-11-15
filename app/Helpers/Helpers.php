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
use DB;
use App\SeoTags;
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

        return DB::table('tracker_sessions')->distinct('client_ip')->count('client_ip'); 
    }
    public static function allVisitors(){

        return DB::table('tracker_sessions')->count('client_ip'); 
    }
    public static function SeoCommontags(){
        return SeoTags::where('slug','home')->first();
    }

  
}