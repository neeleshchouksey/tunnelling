<?php

namespace App\Http\Controllers;

use App\customerinfo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;

class CustomerinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator  =    Validator::make($request->all(), [
                            'customer_name'      =>'required',
                            'customer_email'     =>'required|email',
                            'phone'              =>'required',
                            'company_name'       =>'required',
                            ]);
        if ($validator->fails()) {
            
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
       
        $customerinfo = request(['customer_name','customer_email','phone','country','company_name','job_title']);
        Session::put('customerinfo',$customerinfo);
        return "thirdstep";
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customerinfo  $customerinfo
     * @return \Illuminate\Http\Response
     */
    public function show(customerinfo $customerinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customerinfo  $customerinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(customerinfo $customerinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customerinfo  $customerinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customerinfo $customerinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customerinfo  $customerinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(customerinfo $customerinfo)
    {
        //
    }
}
