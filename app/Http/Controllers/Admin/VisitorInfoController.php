<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TrackerSession;

class VisitorInfoController extends Controller
{
    //
    public function index(){
    	
    	return view('admin.visitors.index'); 
    }
    public function ajax(){
    	$visitors 		= 	TrackerSession::groupby('client_ip')->latest('updated_at')->get();
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

          $records[$i]['date']          =    $value->created_at->format('m-d-Y');
          $i++;
        }

        echo json_encode($records);
    	 
    }
}
