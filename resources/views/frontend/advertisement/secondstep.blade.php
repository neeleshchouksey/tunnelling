@extends('layout.frontend.master')
	@section('content')
	@php
$nextyear =date('Y',strtotime('+1 year'));
@endphp
@include('partials.frontendparts.advertiseSubBanner')
	 
	  <section class="subscription-included">
	  	<div class="container">
			@include('partials.frontendparts.advertiseTop')
			<div class="advertise-box" id="second-step">
				<div class="order-step">
					<ul>
						<li id="step-1" class="current completed">
							<a href="javascript:void(0)">
								<span class="text">1</span>
								<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
								ad format
							</a>
						</li>
						<li id="step-2" class="current">
							<a href="javascript:void(0)">
								<span class="text">2</span>
								<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
								personal information
							</a>
						</li>
						<li id="step-3">
							<a href="javascript:void(0)">
								<span class="text">2</span>
								<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
								summary & confirmation
							</a>
						</li>
					</ul>
				</div>
				<p class="choose text-center">Enter your personal information:</p>
				@include('layout.frontend.error')
				<form id="customerDetailfrom" action="{{url('advertise/customerinfo')}}" method="post">
					<div class="form-container container">
						<div class="form-row">					
							<div class="form-column">
								<div class="text-outer">
								{{ csrf_field() }}
								<input class="text-filed" placeholder="" type="text" name="customer_name" value="{{Input::old('customer_name')}}">
								<span>Name</span>
								</div>
							</div>
							<div class="form-column">
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="email" name="customer_email" value="{{Input::old('customer_email')}}">
								<span>Email</span>
								</div>
							</div>
							<div class="form-column">
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="phone"  value="{{Input::old('phone')}}">
								<span>Phone</span>
								</div>
							</div>
							<div class="form-column">
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="country" value="{{Input::old('country')}}">
								<span>Country (optional)</span>
								</div>
							</div>
							<div class="company-information">
								<p class="text-center">Enter your company information:</p>
								<div class="form-column">
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="company_name"  value="{{Input::old('company_name')}}">
								<span>Company</span>
								</div>
							</div>
								<div class="form-column">
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="job_title" value="{{Input::old('job_title')}}">
								<span>Job title (optional)</span>
								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="step-btn text-center">
						<button href="#" class="btn-icon shadow-none" disabled id="second-step-button"><span class="btn-download">Next Step </span><span class="download-icon"><img src="{{url('/images/next-step.png')}}" alt="download-btn"></span></button>
					</div>
				</form>				
			</div>
		</div>
	  </section>
	@endsection
