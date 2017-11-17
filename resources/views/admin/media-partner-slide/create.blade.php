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
                          <h3 class="box-title">Add New Slide</h3>
                        </div>
                        
                        
                     
                          
                        {!! Form::open(array('url' => "admin/media-partner-slide","enctype"=>"multipart/form-data","method"=>'post')) !!}
                          
                         
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td><strong>Slide Image</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="file" class="form-control" name="slide"  required>
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Slide Link</strong></td>
                                  <td>:</td>
                                  <td>
                                    <input type="text" class="form-control" name="link"  required>
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Media Partner</strong></td>
                                  <td>:</td>
                                  <td>
                                    <select  class="form-control" name="media_id"  required>
                                      @foreach($mediaPartners as $mediaPartner)
                                        <option value="{{$mediaPartner->id}}">{{$mediaPartner->title}}</option>
                                      @endforeach
                                    </select>
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
          </div>
          
            
          
       
        </section>
      </div>


        

  <!-- /.content-wrapper -->
@endsection