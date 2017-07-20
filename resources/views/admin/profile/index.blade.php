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
                          
                        {!! Form::open(array('url' => "admin/profile/".Auth::guard('admin')->user()->id,"enctype"=>"multipart/form-data","method"=>'put')) !!}
                         
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td><strong>Name</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="text" class="form-control" name="name" value="{{Auth::guard('admin')->user()->name}}" required>
                                    @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                    @endif
                                  </td>
                                </tr>
                                  <tr>
                                  <td><strong>Email</strong></td>
                                  <td>:</td>
                                  <td>
                                   <input type="text" class="form-control" name="email" value="{{Auth::guard('admin')->user()->email}}" required>
                                    @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                    @endif
 
                                  </td>
                                </tr>
                               
                                <tr>
                                  <td><strong>Password</strong></td>
                                  <td>:</td>
                                  <td>
                                        <input type="password" class="form-control" name="newpassword" value="" >
                                         @if ($errors->has('newpassword'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('newpassword') }}</strong>
                                          </span>
                                        @endif
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Confirm Password</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="password" class="form-control" name="confirmpassword" value="" >
                                     @if ($errors->has('confirmpassword'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('confirmpassword') }}</strong>
                                      </span>
                                    @endif
                                  </td>
                                </tr>
                               
                              </tbody>
                            </table>
                            <input type="submit" id="submit-all" class="btn btn-info pull-right m_t10" name="submit" value="Submit">
                          </div>
                        </form>
                      
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