<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class AboutusController extends Controller
{
    //
    public function index()
    {
        //
        $page       	  =   Page::where('slug','about-us')->first();
        $about            =   (object) array();
        $about->image     =   $page->section()->where('meta_key','image')->value('meta_value');
        $about->title     =   $page->section()->where('meta_key','title')->value('meta_value');
        $about->text      =   $page->section()->where('meta_key','text')->value('meta_value');
        return view('frontend.about.index',compact('about'));
    }
}
