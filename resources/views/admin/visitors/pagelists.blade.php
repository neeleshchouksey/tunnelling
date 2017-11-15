@php
  if(request()->is('admin/uniquevisitorpagelist/*')):
  $url    = url('admin/visitor');
  else:
    $url    = url('admin/allvisitors');
  endif;
@endphp

@extends('layout.admin.master')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Visitor Pages Info <a href="{{$url}}" class="btn btn-primary pull-right" >Back</a>
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
              <h3 class="box-title">
              	Visitors Page Section List 

              </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Visitor IP</th>
                  <th>Visitor Country</th>
                  <th>Visitor City</th>
                  <th>Visited At</th>
                  <th>Visited Paths</th> 
                </tr>
                </thead>
                <tbody>
                 @forelse($sessionPages as $page)
                 	@php
                 		 if(empty($sessionDetails->geolocation)){
				            $country     = '';
				            $city        = '';
				          }
				          else{
				         	  $country 	  =	   $sessionDetails->geolocation->country_name;
				         	  $city 		    =	   $sessionDetails->geolocation->city;
				          }
                 	@endphp
                 	<tr>
                 		<td>{{ $sessionDetails->client_ip}}</td>
                 		<td>{{ $country }}</td>
                 		<td>{{ $city }}</td>
                 		<td>{{$sessionDetails->created_at->format('d-m-Y')}}</td>
                 		<td>{{$page->paths->path}}</td>
                 		
                 	</tr>
                 @empty

                 @endforelse
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