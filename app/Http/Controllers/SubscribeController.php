<?php

namespace App\Http\Controllers;

use App\subscribe;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

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
        $insertData->email_verify_code = md5($insertData->uni_subs_no);
        $validator  =    Validator::make($request->all(), [
                            'email'=>'required|email|unique:subscribes,email'
                            ]);
        if ($validator->fails()) {
           
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($request->all());
        }

        //$this->validate(request(),['email'=>'required|email|unique:subscribes,email']);
        $insertData->save();
        //customer mail     
        $to         =   $request->email;
        $subject    =   "Subscription Acknowledgement  ".$insertData->uni_subs_no;
        $message    =   view('partials.emails.suscriptionthird')->with('emailData',$insertData->id."__".$insertData->email_verify_code);
        $from       =   "subscriptions@tunnellingint.com"; 
        $headers    =   "From: subscriptions@tunnellingint.com" . "\r\n";
        $headers    .= "MIME-Version: 1.0" . "\r\n";
        $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        if(mail($to , $subject, $message, $headers)){
            return view('frontend.subscribe.suscriptionsecond');
            
        }
        else{
            $insertData->destroy($insertData->id);
            return back();

        }  
        
    }
    /**
     * create a unique no.
     *
     * @return \unique no
     */
    public function generateUniqueNo(){

        return "TI-SB-".mt_rand(1,999999);

    }

    public function confirmSubscription($data = null){
        $confirm_data   =   explode("__",$data);
        if(!empty($confirm_data[0])&&!empty($confirm_data[1])){
            $fetchData  = subscribe::find($confirm_data[0]);
            if($fetchData->id == $confirm_data[0] && $fetchData->email_verify_code == $confirm_data[1] && $fetchData->email_verify_code!=''&& $confirm_data[1]!=''){
                return view('frontend.subscribe.suscriptionfourth')->with('id',$confirm_data[0]);
            }
        }
        else{
            return view('frontend.subscribe.index');
        }

    }

    public function personalDetail(Request $request)
    {
        $status='1';
       $updateData = subscribe::find($request->id); 
       $updateData->name =$request->name;
       $updateData->country = $request->email;
       $updateData->company = $request->company;
       $updateData->job_title = $request->job_title;
       $updateData->status = $status;
       $validator  =    Validator::make($request->all(), [
                            'name'      =>'required',
                            'company'     =>'required',
                            ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
       if($updateData->save()){

                $todayData=subscribe::where('created_at', '>=', Carbon::today()->toDateString())->get();            
            if($todayData){
                //$owner_to         =   "subscriptions@tunnellingint.com"; 
                $owner_to         =    "gaurav@whitebrains.in";
                $owner_subject    =   "New Subscription from Website - ".$updateData->uni_subs_no;
                $owner_message    =   view('partials.emails.suscribeemail')->with('todayData',$todayData);
                $owner_headers    =   "From:$request->email" . "\r\n";
                $owner_headers   .=   "MIME-Version: 1.0" . "\r\n";
                $owner_headers   .=   "Content-type:text/html;charset=UTF-8" . "\r\n";
                mail($owner_to , $owner_subject, $owner_message, $owner_headers);
                return view('frontend.subscribe.suscriptionlast');
            }
         
       }

    }
    
}
