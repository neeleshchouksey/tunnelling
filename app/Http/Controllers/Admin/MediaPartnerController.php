<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MediaPartner;
class MediaPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.media-partner.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.media-partner.create'); 
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
   
        if($request->file('photo')->move(public_path('uploads/media-partner'), $imageName)){
            $mediaPartner                   =   new MediaPartner;
            $mediaPartner->title            =   $request->name;
            $mediaPartner->description      =   $request->description;
            $mediaPartner->image            =   $imageName;
            $mediaPartner->imageUrl         =   $request->imageUrl;
            $mediaPartner->save();
            return redirect('admin/media-partner');
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
        $mediaPartner     =   MediaPartner::find($id);
        return view('admin.media-partner.edit',compact("mediaPartner")); 
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
           
        $mediaPartner               =   MediaPartner::find($id);
        $mediaPartner->title        =   $request->name;
        $mediaPartner->description  =   $request->description;
        $mediaPartner->imageUrl     =   $request->imageUrl;
   
   
        
        if($request->file('photo')!=''){
            $imageName = $rand.'.'.$request->file('photo')->getClientOriginalExtension();
            
            if($request->file('photo')->move(public_path('uploads/media-partner'), $imageName)){
                $path = public_path("uploads/media-partner/$mediaPartner->image");
                unlink($path);
                $mediaPartner->image       =   $imageName;
            }
        }

        $mediaPartner->save();
        return redirect('admin/media-partner');
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
        $mediaPartner     =   MediaPartner::find($id);
        $mediaPartner->delete();
    }
    public function ajax()
    {
        //
        $mediaPartners        =   MediaPartner::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($mediaPartners as $key => $value) {
          //print_r(expression)
          # code...
            $editBtn                =   "<a href='".url("admin/media-partner/$value->id/edit")."' class='btn btn-info'><i class='fa fa-pencil'></i></a> ";
            $delteBtn               =   "<a href='".route("media-partner.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_mediaPartner' value='".$value->id."'><i class='fa  fa-trash'></i></a>";

            $records[$i]['image']   =   "<img src='".asset("uploads/media-partner/$value->image")."' class='img img-md' />";
            $records[$i]['name']    =   $value->title;  
            $records[$i]['action']  =   $editBtn." ".$delteBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
