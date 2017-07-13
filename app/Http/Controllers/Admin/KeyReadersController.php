<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Keyreader;

class KeyReadersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        return view('admin.keyreader.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.keyreader.create'); 
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
       
            if($request->file('photo')->move(public_path('uploads/keyreader'), $imageName)){
                $Keyreader              =   new Keyreader;
                $Keyreader->name        =   $request->name;
                $Keyreader->image       =   $imageName;
                $Keyreader->save();
                return redirect('admin/keyreader');
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
        $keyreader     =   Keyreader::find($id);
        return view('admin.keyreader.edit',compact("keyreader")); 
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
           
            $Keyreader     =   Keyreader::find($id);
            $Keyreader->name        =   $request->name;
       
            
            if($request->file('photo')!=''){
                $imageName = $rand.'.'.$request->file('photo')->getClientOriginalExtension();
                
                if($request->file('photo')->move(public_path('uploads/keyreader'), $imageName)){
                    $path = public_path("uploads/keyreader/$Keyreader->image");
                    unlink($path);
                    $Keyreader->image       =   $imageName;
                }
            }

            $Keyreader->save();
            return redirect('admin/keyreader');
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
        $Keyreader     =   Keyreader::find($id);
        $Keyreader->delete();
        //die('test');
    }
    public function ajax()
    {
        //
        $Keyreaders        =   Keyreader::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($Keyreaders as $key => $value) {
          //print_r(expression)
          # code...
            $editBtn                =   "<a href='".url("admin/keyreader/$value->id/edit")."' class='btn btn-info'><i class='fa fa-pencil'></i></a> ";
            $delteBtn               =   "<a href='".route("keyreader.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_keyreader' value='".$value->id."'><i class='fa  fa-trash'></i></a>";

            $records[$i]['image']   =   "<img src='".asset("uploads/keyreader/$value->image")."' class='img img-md' />";
            $records[$i]['name']    =   $value->name;  
            $records[$i]['action']  =   $editBtn." ".$delteBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
