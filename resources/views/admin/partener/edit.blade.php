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
                          <h3 class="box-title">Edit Partner</h3>
                        </div>
                        
                        
                        <!-- <form action="{{url('admin/advertiser')}}" method="post" id="loading_location_form" enctype="multipart/form-data"> -->
                          
                        {!! Form::open(array('url' => "admin/partner/$partner->id","enctype"=>"multipart/form-data","method"=>'put')) !!}
                          
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                                <!-- <tr>
                                  <td><strong>Title</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="text" class="form-control" name="name" value="{{$partner->name}}" required>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                                  <tr>
                                  <td><strong>Description</strong></td>
                                  <td>:</td>
                                  <td>
                                    <textarea type="text" class="form-control" name="description" required>{{$partner->description}}</textarea>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr> -->
                                <tr>
                                  <td><strong>Select Image</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="file" class="form-control" name="photo" >
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                             
                              </tbody>
                            </table>
                            <input type="submit" id="submit-all" class="btn btn-info pull-right m_t10" name="submit" value="Submit">
                          </div>
                        </form>
                        <div class="img col-md-12">
                          <img src='{{asset("uploads/partner/$partner->image")}}' class="img-responsive img">
                        </div>
                        <div class="clear-fix">
                          
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