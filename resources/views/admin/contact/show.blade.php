@extends('layout.admin.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  
 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header"></section>
        
        <section class="content">
          <div class="row m_b15">
            <div class="col-md-12">
              <div class="box">
                <div class="box-body">
                  <div class="row">
                    <div class="col-md-10 col-md-push-1">
                      <div class="">
                        <div class="box-header">
                          <h3 class="box-title">View Contact Message</h3>
                        </div>
                        
                        
                        
                          <!-- <input type="text" style="visibility: hidden" name="location[image]" id="imagecreator" value="<?php if(isset($location->image)) echo $location->image;?>">
                          <span class="show_error_msg"></span>   -->
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                              
                                <tr>
                                  <td><strong>Name</strong></td>
                                  <td>:</td>
                                  <td>
                                    {{$contact->name}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Email</strong></td>
                                  <td>:</td>
                                  <td>
                                    {{$contact->email}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Phone</strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$contact->phone}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Company </strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$contact->company}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Message</strong></td>
                                  <td>:</td>
                                  <td style="word-break:break-all">
                                      {{$contact->message}}
                                  </td>
                                </tr>
                               


                             
                              </tbody>
                            </table>
                           
                          </div>
                        
                          
                        </div>
                      </div>
                    </div>                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          
            
          
       
        </section>
      </div>


        

  <!-- /.content-wrapper -->
@endsection