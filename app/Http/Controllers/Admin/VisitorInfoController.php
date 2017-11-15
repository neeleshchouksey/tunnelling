<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TrackerSession;
use App\TrackerPaths;
use App\TrackerLog;
class VisitorInfoController extends Controller
{
    //
    public function index(){
    	
    	return view('admin.visitors.index'); 
    }

    public function ajax(){
    	$visitors 		= 	TrackerSession::groupBy('client_ip')->latest('updated_at')->get();
    	$records            =   array();
        $i                  =   0;
        
        foreach ($visitors as $key => $value) {

         	$records[$i]['client_ip'] 	  = 	$value->client_ip;

          if(empty($value->geolocation)){
            $records[$i]['country']     = '';
            $records[$i]['city']        = '';
          }
          else{
         	  $records[$i]['country'] 	  =	   $value->geolocation->country_name;
         	  $records[$i]['city'] 		    =	   $value->geolocation->city;
          }


          $records[$i]['date']          =    $value->created_at->format('d-m-Y');


          $url = url("admin/uniquevisitorpagelist/".$value->id);
          $records[$i]['action']        =     '<a href="'.$url.'">View pages</a>';

          $i++;
        }
        
        echo json_encode($records);
    	 
    }
    public function allVisitorAjax(){
      $visitors     =   TrackerSession::latest('updated_at')->get();
      $records            =   array();
        $i                  =   0;
        
        foreach ($visitors as $key => $value) {

          $records[$i]['client_ip']     =   $value->client_ip;

          if(empty($value->geolocation)){
            $records[$i]['country']     = '';
            $records[$i]['city']        = '';
          }
          else{
            $records[$i]['country']     =    $value->geolocation->country_name;
            $records[$i]['city']        =    $value->geolocation->city;
          }

          $records[$i]['date']          =    $value->created_at->format('d-m-Y');
          $url = url("admin/visitorpagelist/".$value->id);
          $records[$i]['action']        =     '<a href="'.$url.'">View pages</a>';
          $i++;
        }
        
        echo json_encode($records);
       
    }


    // Function to get view of visited pages
    public function getVisitedPageList($sessionId){
      $sessionDetails = TrackerSession::find($sessionId);
      
      $sessionPages = $sessionDetails->seslog;
      
      return view("admin.visitors.pagelists", compact("sessionDetails", "sessionPages"));
    }
}
