<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MediaPartnerSlide;
use App\MediaPartner;

class MediaPartnerSlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.media-partner-slide.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mediaPartners   =   MediaPartner::all(); 
        return view('admin.media-partner-slide.create',compact('mediaPartners'));
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
        $getFile = $request->slide;
        $getFile->getClientOriginalExtension();
           
        $imageName = $rand.'.'.$getFile->getClientOriginalExtension();
        
        if($getFile->move(public_path('uploads/media-partner-slide'), $imageName)){

            $slide              =   New MediaPartnerSlide;
            $slide->slide       =   $imageName; 
            $slide->link        =   $request->link;
            $slide->media_id    =   $request->media_id;
            $slide->save();  

        }
       return redirect(route('media-partner-slide.index'));
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
        $slide           =    MediaPartnerSlide::find($id);
        $mediaPartners   =   MediaPartner::all(); 
        return view('admin.media-partner-slide.edit',compact('slide','mediaPartners'));
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
        $slide          =   MediaPartnerSlide::find($id);

        $rand=rand();


        $getFile = $request->slide;

        if(!empty($getFile)){

            $getFile->getClientOriginalExtension();
               
            $imageName = $rand.'.'.$getFile->getClientOriginalExtension();
            
            if($getFile->move(public_path('uploads/media-partner-slide'), $imageName)){

                $path       =   public_path("uploads/media-partner-slide/$slide->slide") ;
                unlink($path);
               
                $slide->slide   =   $imageName; 
               
                
                

            }
        }
        $slide->link        =   $request->link;
        $slide->media_id    =   $request->media_id;
        $slide->save();  
        return redirect(route('media-partner-slide.index'));
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
        $advertiser     =   MediaPartnerSlide::find($id);
        $advertiser->delete();
    }
    public function ajax()
    {
        //
        $advertisers        =   MediaPartnerSlide::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($advertisers as $key => $value) {
          
            $actionBtn          =   "<a href='".url("admin/media-partner-slide/$value->id/edit")."' class='btn btn-info'><i class='fa fa-eye'></i></a> ";
            $actionBtn          .=   " <a href='".route("media-partner-slide.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_mediaPartner_slide' value='".$value->id."'><i class='fa  fa-trash'></i></a>";
           
            $records[$i]['image']             =     "<img class='img img-md' src='".asset("uploads/media-partner-slide/$value->slide")."'/>"; 
            $records[$i]['link']              =      $value->link;
           
          
            $records[$i]['action']            =     $actionBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
