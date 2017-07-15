<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page       =   Page::where('slug','home')->first();
        // echo "<pre>";
        // print_r($page->slider->slider);
        // die;
      
        $home            =   (object) array();
        $home->image     =   $page->section()->where('meta_key','image')->value('meta_value');
        $home->title     =   $page->section()->where('meta_key','title')->value('meta_value');
        $home->text     =   $page->section()->where('meta_key','text')->value('meta_value');
        return view('frontend.index',compact('home','page'));
    }
}
