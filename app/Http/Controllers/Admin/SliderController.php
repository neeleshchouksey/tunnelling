<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Slider;
use App\Slidertype;

class SliderController extends Controller
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
    public function addnew($id)
    {
        //
        $slidertype 	=	Slidertype::find($id);
        return view('admin.slider.create',compact('slidertype'));
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
        $rand=rand();
            
        $imageName = $rand.'.'.$request->file('photo')->getClientOriginalExtension();
   
        if($request->file('photo')->move(public_path('uploads/slider'), $imageName)){
            $slider 				= 	new Slider;
            $slider->slide 			=	$imageName;
            $slider->slider_type 	=	$request->id;
            $slider->caption 		=	$request->caption;
            $slider->heading        =   $request->heading;
            $slider->save();
            return redirect("admin/slider/".$slider->type->slug);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    	$slidertype 	=	Slidertype::where('slug',$id)->first();
        return view('admin.slider.index',compact('slidertype')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slider     =   Slider::find($id);
        return view('admin.slider.edit',compact("slider")); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

            $rand=rand();
           
            $slider     			=   Slider::find($id);
            $slider->caption        =   $request->caption;
            $slider->heading        =   $request->heading;
       
            
            if($request->file('photo')!=''){
                $imageName = $rand.'.'.$request->file('photo')->getClientOriginalExtension();
                
                if($request->file('photo')->move(public_path('uploads/slider'), $imageName)){
                    $path = public_path("uploads/slider/$slider->slide");
                    unlink($path);
                    $slider->slide       =   $imageName;
                }
            }

            $slider->save();
            return redirect('admin/slider/'.$slider->type->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $slider     =   Slider::find($id);
        $slider->delete();
    }
}
