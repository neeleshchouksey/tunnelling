@extends('layout.admin.master')
@section('content')
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
                          <h3 class="box-title">Edit Company Info</h3>
                        </div>
                        
                        
                        
                        {!! Form::open(array('url' => "admin/companyinfo/$companyinfo->id","enctype"=>"multipart/form-data","method"=>'put')) !!}
                          
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td><strong>Company Name</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="text" class="form-control" name="name" value="{{$companyinfo->company_name}}" required>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Company Email </strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="email" class="form-control" name="email" value="{{$companyinfo->company_email}}" required>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Company Phone Number</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="text" class="form-control" name="companyPhone" value="{{$companyinfo->contact_no}}" required>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Company Address</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="text" class="form-control" name="companyAddress" value="{{$companyinfo->company_address}}" required>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                                <!-- <tr>
                                  <td><strong>Contact Us Email Address</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="text" class="form-control" name="contactEmail" value="" required>
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr> -->
                                
                             
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

@endsection