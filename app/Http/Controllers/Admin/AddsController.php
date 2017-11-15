<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AddSlide;
class AddsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.addslide.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addslide.create');
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
        
        if($getFile->move(public_path('uploads/addslide'), $imageName)){

            $slide          =   New AddSlide;
            $slide->slide   =   $imageName; 
            $slide->link    =   $request->link;
            $slide->page_id =   1;
            $slide->save();  

        }
       return redirect(route('addslide.index'));
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
        $slide  =    AddSlide::find($id);
        return view('admin.addslide.edit',compact('slide'));
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
        $slide          =   AddSlide::find($id);

        $rand=rand();


        $getFile = $request->slide;

        if(!empty($getFile)){

            $getFile->getClientOriginalExtension();
               
            $imageName = $rand.'.'.$getFile->getClientOriginalExtension();
            
            if($getFile->move(public_path('uploads/addslide'), $imageName)){

                $path       =   public_path("uploads/addslide/$slide->slide") ;
                unlink($path);
               
                $slide->slide   =   $imageName; 
               
                
                

            }
        }
        $slide->link    =   $request->link;
        $slide->save();  
        return redirect(route('addslide.index'));
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
        $advertiser     =   AddSlide::find($id);
        $advertiser->delete();
    }
    public function ajax()
    {
        //
        $advertisers        =   AddSlide::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($advertisers as $key => $value) {
          
            $actionBtn          =   "<a href='".url("admin/addslide/$value->id/edit")."' class='btn btn-info'><i class='fa fa-eye'></i></a> ";
            $actionBtn          .=   " <a href='".route("addslide.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_addslide' value='".$value->id."'><i class='fa  fa-trash'></i></a>";
           
            $records[$i]['image']             =     "<img class='img img-md' src='".asset("uploads/addslide/$value->slide")."'/>"; 
            $records[$i]['link']              =      $value->link;
           
          
            $records[$i]['action']            =     $actionBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
