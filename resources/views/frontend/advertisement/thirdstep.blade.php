@extends('layout.frontend.master')
	@section('content')
@php
$nextyear =date('Y',strtotime('+1 year'));
@endphp
@include('partials.frontendparts.advertiseSubBanner')
	<section class="subscription-included">
	  	<div class="container">
			@include('partials.frontendparts.advertiseTop')
			<div class="advertise-box" id="third-step">
			<div class="order-step">
				<ul>
					<li id="step-1" class="current completed">
						<a href="javascript:void(0)">
							<span class="text">1</span>
							<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
							ad format
						</a>
					</li>
					<li id="step-2" class="current completed">
						<a href="javascript:void(0)">
							<span class="text">2</span>
							<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
							personal information
						</a>
					</li>
					<li id="step-3" class="current">
						<a href="javascript:void(0)">
							<span class="text">3</span>
							<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
							summary & confirmation
						</a>
					</li>
				</ul>
			</div>
			@if(Cart::isEmpty())
			<p class="choose text-center">Your  Cart is empty. Please Select Advestise<a href="{{url('advertise/firststep')}}">Here</a></p>
			@else
			<p class="choose text-center">Summary & Confirmation:</p>
			{!! Form::open( ['method' => 'post','url'=>'advertise/thirdstepsubmit']) !!}

				<div class="product-card-detail">
					<div class="table">
						<div class="table-row">
							<div class="table-cell delete-icon"></div>
							<div class="table-cell format-td">format</div>
							<div class="table-cell quantity-td">quantity</div>
							<div class="table-cell price-td">price</div>
							<div class="table-cell subtotal-td">subtotal</div>
						</div>

						@foreach($products as $key=> $product)

						@include('partials.frontendparts.productrow')
		
						@endforeach
					
						
					</div>
					<div class="total-section">
						<div class="pull-right">
							<p>10% discount: <span id="third-step-discount">-&pound;{{$discount}}</span></p>
							<p class="total">total: <span id="third-step-total">&pound;{{$total}}</span></p>
						</div>
					</div>
				</div>
			
				
				<div class="step-btn text-center">
					<button name="submit" type="submit" class="btn-icon shadow-none"><span class="btn-download">CONFIRM RESERVATION</span><span class="download-icon"><img src="{{url('/images/checked-white.png')}}" alt="download-btn"></span></button>
				</div>
			</form>
			@endif
		</div>
	</section>
	@endsection
