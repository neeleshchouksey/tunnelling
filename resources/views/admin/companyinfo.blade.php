@extends('layout.admin.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <form>
            <div class="form-group">
              <label for="company_name">Company Name :</label>
              <input type="text" class="form-control" id="company_name">
            </div>
            <div class="form-group">
              <label for="company_email">Company Email :</label>
              <input type="email" class="form-control" id="company_email">
            </div>
            <div class="form-group">
              <label for="company_no">Company Phone Number :</label>
              <input type="text" class="form-control" id="company_no">
            </div>
            <div class="form-group">
              <label for="company_Address">Company Address:</label>
              <input type="text" class="form-control" id="company_Address">
            </div>            
            <div class="form-group">
              <label for="contact_us_email">Contact Us Email Address:</label>
              <input type="email" class="form-control" id="contact_us_email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
@endsection