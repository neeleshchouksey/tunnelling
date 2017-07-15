@extends('layout.admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$slidertype->name}}
        <!-- <small>advanced tables</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">{{$slidertype->name}}</a></li>
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
              <h3 class="box-title">{{$slidertype->name}} List</h3>
              <a href='{{url("admin/slider/addnew/$slidertype->id")}}' class="btn btn-success pull-right"> Add New </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="advister_list_table" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Slide</th>
                  <th>Caption</th>
                  <th>Action</th>
                 
                </tr>
                </thead>
                <tbody>
                    @foreach($slidertype->slider as $slider)
                  <tr>
                    <td>{{$slider->slide}}</td>
                     <td>{{$slider->caption}}</td>
                    <td>
                      <a href='{{url("admin/slider/$slider->id/edit")}}' class='btn btn-info'><i class='fa fa-pencil'></i></a> 
                      <a href='{{route("slider.destroy",["id"=>$slider->id])}}' data-method='delete' class='btn btn-danger delete_slider' value='{{$slider->id}}'><i class='fa  fa-trash'></i></a>
</td>
                 
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