<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MediaPartner;
class MediaPartnerController extends Controller
{
    //
    public function index()
    {
        //
       	$mediaPartners        =   MediaPartner::all();
        return view('frontend.media-partner.index',compact('mediaPartners'));
    }
}
