@extends('layout.admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Visitors Info
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
              <h3 class="box-title">Visitors Info Section List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="visitor_list_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Visitor IP</th>
                  <th>Visitor Country</th>
                  <th>Visitor City</th>
                 
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