<?php

namespace App\Http\Controllers;

use App\contact;

use App\companyinfo;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.   
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contactData                 =   new contact;
        $contactData->uni_contc_no    =   $this->generateUniqueNo();        
        $contactData->name           =   $request->name;
        $contactData->message        =   $request->message;
        $contactData->company        =   $request->company;
        $contactData->email          =   $request->email;
        $contactData->phone          =   $request->phone;
        
        // fetch company info
        $companyInfo = companyinfo::first();
        

        //customer mail     
        $to         =   $request->email;
        $subject    =   "Message Received - ".$contactData->uni_contc_no ;
        $from       =   "subscriptions@tunnellingint.com"; 
        $headers    =   "From:customercare@tunnellingint.com" . "\r\n";
        $headers   .=   "MIME-Version: 1.0" . "\r\n";
        $headers   .=   "Content-type:text/html;charset=UTF-8" . "\r\n";
        $message    =   view('partials.emails.contactemail')->with('companyInfo',$companyInfo);
         


        if(mail($to , $subject, $message, $headers)){

            if($contactData->save()){

                $contactData = contact::find($contactData->id);
               
                if($todayData){
                    $owner_to         =   "subscriptions@tunnellingint.com"; 
                    $owner_subject    =   "New Subscription from Website - ".$insertData->uni_subs_no;
                    $owner_message    =   view('partials.emails.suscribeemail')->with('todayData',$todayData);
                    $owner_headers    =   "From:$request->email" . "\r\n";
                    $owner_headers   .=   "MIME-Version: 1.0" . "\r\n";
                    $owner_headers   .=   "Content-type:text/html;charset=UTF-8" . "\r\n";
                    mail($owner_to , $owner_subject, $owner_message, $owner_headers);
                }
                
            }
            
        }  








        $contact    =    array( 'contact' => 'true','email' =>$request->email,'contact_display'=>'block');
        return redirect()->back()->with($contact);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
    /**
     * create a unique no.
     *
     * @return \unique no
     */
    public function generateUniqueNo(){

        return "TI-CN-".mt_rand(1,999999);

    }
}
