<?php

namespace App\Http\Controllers\Admin;
use App\Subscribe; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.subscribe.index');
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
        $subscribe        =      Subscribe::find($id);
        return view('admin.subscribe.show',compact('subscribe'));
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
        $subscribe  = Subscribe::find($id);
        $subscribe->delete();
    }
    public function ajax()
    {
        //
        $subscribers        =   Subscribe::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($subscribers as $key => $value) {
          //print_r(expression)
          # code...
            $actionBtn          =   "<a href='".url("admin/subscribe/$value->id")."' class='btn btn-info'><i class='fa fa-eye'></i></a> ";
            $actionBtn          .=   " <a href='".route("subscribe.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_subscribe' value='".$value->id."'><i class='fa  fa-trash'></i></a>";

            $records[$i]['name']              =     $value->name;
            $records[$i]['email']             =     $value->email;
            $records[$i]['company']           =     $value->company;
          
            $records[$i]['action']            =     $actionBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
