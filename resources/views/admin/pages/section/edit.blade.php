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
                          <h3 class="box-title">Edit {{$section->name}}</h3>
                        </div>
                        
                        
                     
                          
                        {!! Form::open(array('url' => "admin/pages/section/$section->id","enctype"=>"multipart/form-data","method"=>'put')) !!}
                          
                         
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td><strong>{{$section->name}}</strong></td>
                                  <td>:</td>
                                  <td>
                                    @if($section->type=='textarea')
                                      <textarea  class="form-control" name="section[{{$section->meta_key}}]"  rows="10" required> {{$section->meta_value}}</textarea>
                                    @else
                                      <input type="{{$section->type}}" class="form-control" name="section[{{$section->meta_key}}]"  required>
                                    @endif
                                    <span class="show_error_msg"></span>
                                  </td>
                                </tr>
                             
                              </tbody>
                            </table>
                            <input type="submit" id="submit-all" class="btn btn-info pull-right m_t10" name="submit" value="Submit">
                          </div>
                        </form>
                        @if($section->type=='file')
                          <div class="img col-md-12">
                            <img src='{{asset("uploads/pages/$section->meta_value")}}' class="img-responsive">
                          </div>
                          <div class="clear-fix">
                        @endif
                          
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