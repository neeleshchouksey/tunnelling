@extends('layout.admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$page->name}}
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
              <h3 class="box-title">{{$page->name}} Section List</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="advister_list_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Section</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                  @foreach($page->section as $section)
                  <tr>
                    <td>{{$section->name}}</td>
                    <td><a href='{{url("admin/pages/section/$section->id/edit")}}' class='btn btn-info'><i class='fa fa-pencil'></i></a></td>
                 
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