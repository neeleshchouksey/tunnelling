<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Advertiser;

class AdvertiserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.advertiser.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.advertiser.create'); 
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
            //echo "<pre>";
            //print_r($request->file('photo'));
            //die;
            $imageName = $rand.'.'.$request->file('photo')->getClientOriginalExtension();
       
            if($request->file('photo')->move(public_path('uploads/advertiser'), $imageName)){
                $advertiser 		= 	new Advertiser;
                $advertiser->Advertiser 	=	$imageName;
                $advertiser->save();
                return redirect('admin/advertiser');
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
        $advertiser     =   Advertiser::find($id);
        return view('admin.advertiser.edit',compact("advertiser")); 
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
            //echo "<pre>";
            //print_r($request->file('photo'));
            //die;
            $imageName = $rand.'.'.$request->file('photo')->getClientOriginalExtension();
       
            if($request->file('photo')->move(public_path('uploads/advertiser'), $imageName)){
                
                $advertiser     =   Advertiser::find($id);
                $advertiser->Advertiser     =   $imageName;
                $advertiser->save();
                return redirect('admin/advertiser');
            }
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
        $advertiser     =   Advertiser::find($id);
        $advertiser->delete();
        //die('test');
    }
    public function ajax()
    {
        //
        $advertisers        =   Advertiser::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($advertisers as $key => $value) {
          //print_r(expression)
          # code...
          $editBtn           =   "<a href='".url("admin/advertiser/$value->id/edit")."' class='btn btn-info'><i class='fa fa-pencil'></i></a> ";
          $delteBtn          =   "<a href='".route("advertiser.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_advertiser' value='".$value->id."'><i class='fa  fa-trash'></i></a>";

          $records[$i]['advertiser']        =   "<img src='".asset("uploads/advertiser/$value->advertiser")."' class='img img-md' />";
          
          $records[$i]['action']            =   $editBtn." ".$delteBtn;
          $i++;
        }

        echo json_encode($records);
    }
}
