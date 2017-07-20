<?php

namespace App\Http\Controllers\Admin;
use App\Pagesection;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesSectionController extends Controller
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
        //
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
        $section        = PageSection::find($id);

        return   view('admin.pages.section.edit',compact('section'));         

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
        $getsectidondata    =   $request->section;
        
        $key        =   key($getsectidondata);

        $section    =   Pagesection::find($id);

        if($section->type=='file'){
            $rand=rand();
            $getFile = $request->section[$key];
            $getFile->getClientOriginalExtension();
           
            $imageName = $rand.'.'.$getFile->getClientOriginalExtension();
            
            if($getFile->move(public_path('uploads/pages'), $imageName)){
                if($section->meta_value){
                    $path       =   public_path("uploads/pages/$section->meta_value") ;
                    unlink($path);
                }
                $section->meta_value        =   $imageName;
            }
        }
        else{
            $section->meta_value    =    $request->section[$key];
        }
        $section->save();
        //echo $section->page->slug;
        //die;
        return redirect("admin/pages/".$section->page->slug);
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
    }
}
