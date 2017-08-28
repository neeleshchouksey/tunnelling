<?php

namespace App\Http\Controllers\Admin;
use App\Customerinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         return view('admin.advertise.index');
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
        $customerinfo        =      Customerinfo::find($id);
        // echo "<pre>";
        // print_r($customerinfo->advertise);
        // die;
        return view('admin.advertise.show',compact('customerinfo'));
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
        $customerinfo   = Customerinfo::find($id);
        $customerinfo->advertise->delete();
        $customerinfo->delete();
    }
    public function ajax()
    {
        //
        $advertisers        =   Customerinfo::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($advertisers as $key => $value) {
          //print_r(expression)
          # code...
            $actionBtn          =   "<a href='".url("admin/advertise/$value->id")."' class='btn btn-info'><i class='fa fa-eye'></i></a> ";
            $actionBtn          .=   " <a href='".route("advertise.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_advertise' value='".$value->id."'><i class='fa  fa-trash'></i></a>";
            $records[$i]['order_no']              =     $value->order_uni_no;
            $records[$i]['name']              =     $value->customer_name;
            $records[$i]['email']             =     $value->customer_email;
            $records[$i]['company']           =     $value->company_name;
          
            $records[$i]['action']            =     $actionBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
