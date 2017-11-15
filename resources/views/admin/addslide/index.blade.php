@extends('layout.admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advertises Slides
        <!-- <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Advertises Slides</a></li>
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
              <h3 class="box-title">Advertises Slides</h3>
              <a href="{{url('admin/addslide/create')}}" class="btn btn-success pull-right"> Add New </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="subscribe_list_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Link</th>
                  
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
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