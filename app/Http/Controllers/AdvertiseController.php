<?php

namespace App\Http\Controllers;

use App\advertise;
use Illuminate\Http\Request;
use App\products;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.advertisement.index');
    }
    /**
     * Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function firstStep()
    {
        $firststepData = products::all();
        return view('frontend.advertisement.steps')->with('firststepData',$firststepData);
    }
    /**
     *  Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function secondStep()
    {
        return view('frontend.advertisement.secondstep');
    }
    /**
     *  Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function thirdStep()
    {
        return view('frontend.advertisement.thirdstep');
    }
    /**
     *  Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function finalStep()
    {
        return view('frontend.advertisement.finalstep');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function show(advertise $advertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit(advertise $advertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advertise $advertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(advertise $advertise)
    {
        //
    }

    public function selectProductrow(Request $request){
        $selectProduct = products::find($request->id);
        return view('partials.frontendparts.productrow')->with('selectProduct',$selectProduct);
       
    }
    public function fetchProductprice(Request $request){

        $selectProduct = products::find($request->id);
        $unit = $request->unit;
        $price= $selectProduct->price;
        $total = ($unit*$price);
        return $total;
       
    }
}
