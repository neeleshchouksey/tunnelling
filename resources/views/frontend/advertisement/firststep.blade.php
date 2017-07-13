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
					<span><img src = "{{url('/images/message-icons.png')}}"></span><a href="mailto:journalsint.@icloud">journalsint.@icloud</a>
				</div>
				<div class="topContact">
					<span><img src="{{url('/images/phone-address-icon.png')}}"></span><a href="tel:442072728444">+44 207 272 8444</a>
				</div>
			</div>
		</div>
		<div class="advertise-box" id="first-step">
			<div class="order-step">
				<ul>
					<li id="step-1" class="current">
						<a href="javascript:void(0)">
							<span class="text">1</span>
							<span class="icon"><img src="{{asset('/images/checked.png')}}" alt=""></span>
							ad format
						</a>
					</li>
					<li id="step-2">
						<a href="javascript:void(0)">
							<span class="text">2</span>
							<span class="icon"><img src="{{asset('/images/checked.png')}}" alt=""></span>
							personal information
						</a>
					</li>
					<li id="step-3">
						<a href="javascript:void(0)">
							<span class="text">2</span>
							<span class="icon"><img src="{{asset('/images/checked.png')}}" alt=""></span>
							summary & confirmation
						</a>
					</li>
				</ul>
			</div>
			<p class="choose text-center">Choose your advertising formats:</p>
			<div class="product-option">
			<form id="product_display_form" action="{{asset('/advertise/secondstep')}}" method="post">
			{{ csrf_field() }}
				
				@foreach($firststepData as $data)	
				<div class="product-list" product_id="{{$data->id}}">
					<label>
						<input type="checkbox" name="half-page" >
						<div class="box text-center">
							<span class="checked"><img src="{{asset('/images/checked-blue.png')}}"></span>
							<div class="icon"><img class="product-image" src='{{asset("/images/$data->image_name")}}'></div>
							<h5 class = "product-heading">{{$data->name}}</h5>
							<p class = "product-dimension">{{$data->dimension}}</p>
							<span class = "product-price">£{{$data->price}}</span>
						</div>
					</label>
					<div class="year-publication">
						<p>{{$data->tag}}</p>
						<label>
							<input type="radio" name="issue_{{$data->name}}" year="{{$data->firstyear}}" pr_id="{{$data->id}}">
							<div class="box-radio">
								<span></span>{{$data->firstyear}}
								@if($data->quantity == '1')
								<div class="choice">
									<input type="text" value="0" class="qty"  year="{{$data->firstyear}}">
									<a href="javascript:void(0)" class="btnclic" quantity="plus" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" quantity="minus" id="minusBTn">-</a>
									
								</div>
								@endif
							</div>
						</label>
						<label>
							<input type="radio" name="issue_{{$data->name}}" pr_id="{{$data->id}}" year="{{$data->secondyear}}">
							<div class="box-radio">
								<span></span>{{$data->secondyear}}
								@if($data->quantity == '1')
								<div class="choice">
									<input type="text" value="0" class="qty" year="{{$data->secondyear}}">
									<a href="javascript:void(0)" class="btnclic" quantity="plus" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" quantity="minus" id="minusBTn">-</a>
								</div>
								@endif
							</div>
						</label>
						<label>
							<input type="radio" name="issue_{{$data->name}}" pr_id="{{$data->id}}" year="{{$data->thirdyear}}" >
							<div class="box-radio">
								<span></span>{{$data->thirdyear}}
								@if($data->quantity == '1')
								<div class="choice">
									<input type="text" value="0" class="qty" year="{{$data->thirdyear}}">
									<a href="javascript:void(0)" class="btnclic" quantity="plus" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" quantity="minus" id="minusBTn">-</a>
								</div>
								@endif
							</div>
						</label>
					
					</div>

				</div>
				@endforeach				
			</form>
			</div>
			<div class="offer-code text-center">
			 	<div class="coupan">order 2 or more ads and get <span>10% discount</span></div>	
			</div>
			<div class="step-btn text-center">				
				<button  class="btn-icon shadow-none" disabled id="first-step-button"><span class="btn-download">Next Step </span><span class="download-icon"><img src="{{url('/images/next-step.png')}}" alt="download-btn"></span>
				</button>
			</div>
		</div>
	</div>
  </section>
  
@endsection
