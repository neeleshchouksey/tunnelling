<?php

namespace App\Http\Controllers\Admin;
use App\Contact;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.contact.index');
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
        $contact        =      Contact::find($id);
        return view('admin.contact.show',compact('contact'));
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
        $contact    = Contact::find($id);
        $contact->delete();
    }
    public function ajax()
    {
        //
        $advertisers        =   Contact::all();
        $records            =   array();
        $i                  =   0;
        
        foreach ($advertisers as $key => $value) {
          //print_r(expression)
          # code...
            $actionBtn          =   "<a href='".url("admin/contact/$value->id")."' class='btn btn-info'><i class='fa fa-eye'></i></a> ";
            $actionBtn         .=   " <a href='".route("contact.destroy",['id'=>$value->id])."' data-method='delete' class='btn btn-danger delete_contact' value='".$value->id."'><i class='fa  fa-trash'></i></a>";

            $records[$i]['name']              =     $value->name;
            $records[$i]['email']             =     $value->email;
            $records[$i]['phone']             =     $value->phone;
          
            $records[$i]['action']            =     $actionBtn;
            $i++;
        }

        echo json_encode($records);
    }
}
