<?php

namespace App\Http\Controllers;

use App\subscribe;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.subscribe.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insertData                 =   new subscribe;
        $insertData->uni_subs_no    =   $this->generateUniqueNo();        
        $insertData->email          =   $request->email;

        //customer mail     
        $to         =   $request->email;
        $subject    =   "Subscription Acknowledgement  ".$insertData->uni_subs_no;
        $message    =   "Thank you for subscribing to our newsletter.";
        $from       =   "subscriptions@tunnellingint.com"; 
        $headers    =   "From: subscriptions@tunnellingint.com" . "\r\n";




        // if(mail($to , $subject, $message, $headers)){

        //     $insertData->save(); 
            
        // }  
        $todayData=subscribe::where('created_at', '>=', date('d'))->get();   
        if($todayData){
            $owner_to         =   $request->email;
            $owner_subject    =   "New Subscription from Website - ".$insertData->uni_subs_no;
            $owner_message    =   view('partials.emails.suscribeemail')->with('todayData',$todayData);
            $owner_from       =   "subscriptions@tunnellingint.com"; 
            $owner_headers    =   "From:$request->email" . "\r\n";
            mail($owner_to , $owner_subject, $owner_message, $owner_headers);
            //echo "<pre>";print_r($owner_message);die;
        }

         
        $subscribe  =    array( 'subscribe' => 'true','email' =>$request->email,'display'=>'block');
       
        
        return redirect()->back()->with($subscribe);
    }
    /**
     * create a unique no.
     *
     * @return \unique no
     */
    public function generateUniqueNo(){

        return "TI-SB-".mt_rand(1,999999);

    }
    
}
