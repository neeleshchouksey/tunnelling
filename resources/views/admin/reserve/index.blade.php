@extends('layout.admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <!-- <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <!-- <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li> -->
        <li><a href="#"></a></li>
        <!-- <li class="active">Data tables</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <meta name="csrf-token" content="{{ csrf_token() }}">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> FRONT COVER AD and BACK COVER AD</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="advister_list_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Product name</th>
                  <th>Year</th>
                  <th>Mark As Reserved</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->product->name}}</td>

                      <td>{{$product->year->name}}</td>
                      <td><input type="checkbox" class="update_reserve"  @if($product->status==1) checked @endif data-method="put" action="{{url('admin/reserve/'.$product->id)}}" value="{{$product->id}}"></td>
                    </tr>
                  @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection