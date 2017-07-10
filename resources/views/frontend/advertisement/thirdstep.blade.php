@extends('layout.frontend.master')
	@section('content')
	<section class="subpage-banner text-center adversite">
	  	<div class="container">
			<h1>Advertising reservation</h1>
			<hr>
			<p>Next publication: 2018</p>
		</div>
	</section>	 
	<section class="subscription-included">
	  	<div class="container">
			<div class="top-section">
				<h3>for reservation contact us or fill the form below:</h3>
				<div class="right-contact">
					<div class="topContact">
						<span><img src="{{url('/images/message-icons.png')}}"></span><a href="mailto:journalsint.@icloud">journalsint.@icloud</a>
					</div>
					<div class="topContact">
						<span><img src="{{url('/images/phone-address-icon.png')}}"></span><a href="tel:442072728444">+44 207 272 8444</a>
					</div>
				</div>
			</div>
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
							<span class="text">2</span>
							<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
							summary & confirmation
						</a>
					</li>
				</ul>
			</div>
			<p class="choose text-center">Enter your personal information:</p>
			<form methos="post">
				<div class="product-card-detail">
					<div class="table">
						<div class="table-row">
							<div class="table-cell delete-icon"></div>
							<div class="table-cell format-td">format</div>
							<div class="table-cell quantity-td">quantity</div>
							<div class="table-cell price-td">price</div>
							<div class="table-cell subtotal-td">subtotal</div>
						</div>

						@foreach($selectProduct as $key=> $product)

						@include('partials.frontendparts.productrow')
		
						@endforeach
					
						
					</div>
					<div class="total-section">
						<div class="pull-right">
							<p>10% discount: <span id="third-step-discount">-${{$discount}}</span></p>
							<p class="total">total: <span id="third-step-total">{{$total}}</span></p>
						</div>
					</div>
				</div>
			
				
				<div class="step-btn text-center">
					<button href="#" class="btn-icon shadow-none"><span class="btn-download">Reserve ad </span><span class="download-icon"><img src="{{url('/images/checked-white.png')}}" alt="download-btn"></span></button>
				</div>
			</form>
		</div>
	</section>
	@endsection
