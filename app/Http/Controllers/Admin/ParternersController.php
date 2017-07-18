<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;

class ParternersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        return view('admin.partener.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.partener.create'); 
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
       
            if($request->file('photo')->move(public_path('uploads/partner'), $imageName)){
                $partner                =   new Partner;
               // $partner->name          =   $request->name;
                //$partner->description   =   $request->description;
                $partner->image         =   $imageName;
                $partner->save();
                return redirect('admin/partner');
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

        die('testshow');
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
        $partner     =   Partner::find($id);
        return view('admin.partener.edit',compact("partner")); 
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
           
            $partener               =   Partner::find($id);
            //$partener->name         =   $request->name;
       
            
            if($request->file('photo')!=''){
                $imageName = $rand.'.'.$request->file('photo')->getClientOriginalExtension();
                
                if($request->file('photo')->move(public_path('uploads/partner'), $imageName)){
                    $path = public_path("uploads/partner/$partener->image");
                    unlink($path);
                    $partener->image       =   $imageName;
                }
            }

            $partener->save();
            return redirect('admin/partner');
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
        $Keyreader     =   Partner::find($id);
        $Keyreader->delete();
        //die('test');
    }
    public function ajax()
    {
        //
        $parteners          =   Partner::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($parteners as $key => $value) {
          //print_r(expression)
          # code...
            $editBtn                =   "<a href='".url("admin/partner/$value->id/edit")."' class='btn btn-info'><i class='fa fa-pencil'></i></a> ";
            $delteBtn               =   "<a href='".route("partner.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_partener' value='".$value->id."'><i class='fa  fa-trash'></i></a>";

            $records[$i]['image']   =   "<img src='".asset("uploads/partner/$value->image")."' class='img img-md' />";
            // $records[$i]['name']    =   $value->name;  
            $records[$i]['action']  =   $editBtn." ".$delteBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
