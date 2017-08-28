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
                          <h3 class="box-title">View Customer Information</h3>
                        </div>
                        
                        
                        
                          
                          <div class="box-body">
                            <table class="table">
                              <tbody>
                                 <tr>
                                  <td><strong>Order Number</strong></td>
                                  <td>:</td>
                                  <td>
                                    {{$customerinfo->order_uni_no}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Name</strong></td>
                                  <td>:</td>
                                  <td>
                                    {{$customerinfo->customer_name}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Email</strong></td>
                                  <td>:</td>
                                  <td>
                                    {{$customerinfo->customer_email}}
                                  </td>
                                </tr>
                                
                                <tr>
                                  <td><strong>Company </strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$customerinfo->company_name}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Phone </strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$customerinfo->phone}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Job Title</strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$customerinfo->job_title}}
                                  </td>
                                </tr>
                                <tr>
                                  <td><strong>Country</strong></td>
                                  <td>:</td>
                                  <td>
                                      {{$customerinfo->country}}
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                           
                          </div>
                        
                          
                        </div>
                      </div>
                      <div class="col-md-10 col-md-push-1">
                      <div class="">
                        <div class="box-header">
                          <h3 class="box-title">Advetise Info Customer Information</h3>
                        </div>
                        
                        
                        
                          
                          <div class="box-body">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Product Name</th>
                                  <th>Year</th>
                                  <th>Quantity</th>
                                  <th>Price</th>
                                  <th>Subtotal</th>
                                 
                                </tr>
                              </thead>
                              <tbody>
                                @php 
                                  $productdetails   = (object)json_decode($customerinfo->advertise->productdetail)
                                @endphp
                                @foreach($productdetails as $advertise)
                                <tr>
                                  <td>{{$advertise->name}}</td>
                                  <td>{{$advertise->attributes->year}}</td>
                                  <td>{{$advertise->quantity}}</td>
                                  <td>{{$advertise->price}}</td>
                                  <td>{{$advertise->price*$advertise->quantity}}</td>
                                </tr>
                                @endforeach
                                 
                                <tr>
                                  <td colspan="2"><td>
                                  <td>Sub Total</td>
                                  <td>{{$customerinfo->advertise->subtotal}}</td>
                                </tr>
                                <tr>
                                  <td colspan="2"><td>
                                  <td>Discount</td>
                                  <td>{{$customerinfo->advertise->total- $customerinfo->advertise->subtotal}}</td>
                                </tr>
                                <tr>
                                  <td colspan="2"><td>
                                  <td>Total</td>
                                  <td>{{$customerinfo->advertise->total}}</td>
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