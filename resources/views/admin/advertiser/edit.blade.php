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
                          <h3 class="box-title">Edit Advertiser</h3>
                        </div>
                        <div class="img col-md-12">
                          <img src='{{asset("uploads/advertiser/$advertiser->advertiser")}}' class="img-responsive">
                        </div>
                        <div class="clear-fix">
                          
                        </div>
                        
                        <!-- <form action="{{url('admin/advertiser')}}" method="post" id="loading_location_form" enctype="multipart/form-data"> -->
                          
                        {!! Form::open(array('url' => "admin/advertiser/$advertiser->id","enctype"=>"multipart/form-data","method"=>'put')) !!}
                          
                          <input type="text" style="visibility: hidden" name="location[image]" id="imagecreator" value="<?php if(isset($location->image)) echo $location->image;?>">
                          <span class="show_error_msg"></span>  
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td><strong>Select Advertiser</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="file" class="form-control" name="photo" required>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                             
                              </tbody>
                            </table>
                            <input type="submit" id="submit-all" class="btn btn-info pull-right m_t10" name="submit" value="Submit">
                          </div>
                        </form>
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