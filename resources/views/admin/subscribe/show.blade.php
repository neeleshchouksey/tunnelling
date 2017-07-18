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
                          <h3 class="box-title">View Subscription Detail</h3>
                        </div>
                        
                        
                        
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                              
                                <tr>
                                  <td><strong>Name</strong></td>
                                  <td>:</td>
                                  <td>
                                    {{$subscribe->name}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Email</strong></td>
                                  <td>:</td>
                                  <td>
                                    {{$subscribe->email}}
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td><strong>Company </strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$subscribe->company}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Job Title</strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$subscribe->job_title}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Country</strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$subscribe->country}}
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