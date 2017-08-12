@extends('layout.frontend.master')
@section('content')
	<section class="banner home-banner">
		<div class="container">
			@foreach($page->slider->slider as $slider)
			<div class="banner-content mySlides">
				<div class="left-text">
					<p>{{$slider->caption}}</p>
					<h1>{{$slider->heading}}</h1>
					<a href="{{url('subscribe')}}" class="btn-icon">
						<span class="btn-download">subscribe for free </span><span class="download-icon"><img src="{{url('/images/download-pdf.png')}}" alt="download-btn"></span>
					</a>
					<a href="{{url('advertise')}}" class="bordered-btn">Advertise</a>
				</div>
				<div class="banner-image ">
					<img src='{{asset("uploads/slider/$slider->slide")}}' alt="magazines">
				</div>
				<div class="down-arrow">
					<a href="#aboutSection">
					<span>learn<br>more</span>
					<img src="{{url('/images/down-arrow.png')}}">
					</a>
				</div>
			</div>
			@endforeach
		</div>	
	</section>
	  <!-- <section class="banner-example">BANNER</section> -->
	<section class="about-section" id="aboutSection">
	  	<div class="container">
			<div class="left-image"><img src='{{asset("uploads/pages/$home->image")}}' alt=""></div>
			<div class="about-text">
				<h2>{!! nl2br($home->title)!!}</h2>
				<hr>
				<p>Publication release date: <span>April 2018</span></p>
				<p>{!! nl2br($home->text) !!}</p> 

				<!-- <p>This useful edition along side our newsletters and announcements will enable our readers to have access to the latest tunnelling industry innovations and the companies that are able to put these advances into practice.</p>  -->

				<!-- <p>Subscribe for FREE to receive your complimentary PDF version of Tunnelling International and to have access to our newsletters and industry announcements.</p> -->
			</div>
			<div class="clear"></div>
			<div class="qucik-contact text-center" >
				<div class="col-4">
					<div class="block-content">
						<div class="icon"><img src="{{url('/images/anouncement.png')}}" alt="announcement"></div>
						<h4>announcements</h4>
						<p>Keep informed with up to date<br>tunnelling industry<br>
						announcements.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="block-content">
						<div class="icon"><img src="{{url('/images/stay-in-touch.png')}}" alt="announcement"></div>
						<h4>stay in touch with suppliers</h4>
						<p>Access to the world’s leading<br>suppliers of plant machinery,<br>products and services.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="block-content">
						<div class="icon"><img src="{{url('/images/free-pdf-version.png')}}" alt="announcement"></div>
						<h4>FREE PDF VERSION</h4>
						<p>Just subscribe to receive<br>your yearly issue<br>and newsletters.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="subscribe">
	  		<div class="container">
		  		<div class="left-subscribe">
					<h2>subscribe for free</h2>
					<p>To receive tunnelling industry news and announcements.</p>
				</div>
				<div class="right-form">
					@if(Input::old('test_controller')=="subscribe")
					@include('layout.frontend.error')
					@endif
					<form action="{{url('/subscribe/store')}}" method="post">
					{{ csrf_field() }}
						<input type="hidden" class="text-filed" placeholder="" name="test_controller" value="subscribe">
						<div class="form-row">
							<div class="sub-text">
								
								<div class="text-outer">
								<input type="email" class="text-filed" placeholder="" name="email">

									<span>Email</span>
								</div>
								</div>
							<div class="sub-btn">
								<button type="submit" class="btn-icon"><span class="btn-download">subscribe </span><span class="download-icon"><img src="{{url('/images/subscribe.png')}}" alt="subscribe"></span></button>
							</div>
							
						</div>
							<p><img src="{{url('/images/lock.png')}}" alt="lock"> No SPAM Guarantee</p>
					</form>
				</div>
		    </div>
	</section>
	@php
		$partners 	=	Helper::partner();
	@endphp
	@if(count($partners)>0)
	  <section class="our-partner text-center">
	  		<div class="container">
		  		<h2>our partners</h2>
				<hr>
				<div class="partner-list">
					<ul>
						@foreach($partners as $partner)
							<li><a href="#"><img src='{{asset("uploads/partner/$partner->image")}}' alt="Crossrail"></a></li>
							<!-- <li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
							<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
							<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
							<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
							<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li> -->
						@endforeach
					</ul>
				</div>
				<p>Want to be on our pages? Tell potential castomers about your products! <a href="{{url('advertise/firststep')}}">Advertise on our pages.</a></p>
		  </div>
	  </section>
	 @endif
	 
	<section class="contact-us text-center">
	  	<div class="container">
			<h2>Contact us</h2>
			<hr>
			<p>We are here to help. Call us anytime.</p>
			 @php 
      			$companyInfo=Helper::companyinfo()
    		@endphp
			<div class="contact-addresses">
				<p><a href="mailto:journalsint.@icloud"><img src="{{url('/images/message-address.png')}}"> {{$companyInfo->company_email}}</a></p>
				<p class="middle-margin custom-home-contact-address"><img src="{{url('/images/pin-address.png')}}"> {{$companyInfo->company_address}}</p>
				<p><a href="tel:442072728444"><img src="{{url('/images/phone-address.png')}}"> {{$companyInfo->contact_no}}</a></p>
			</div>
			<form action="{{url('contact/store')}}" method="post">
			{{ csrf_field() }}
			<div class="form-content">
			
			@if(Input::old('test_controller')=="contact")
			@include('layout.frontend.error')
			@endif
			
				<input type="hidden" class="text-filed" placeholder="" name="test_controller" value="contact">
				<ul>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="" name="name" value="{{Input::old('name')}}">

						<span>Name</span>
						</div>
							</li>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="" name="email" value="{{Input::old('email')}}">
						<span>Email</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="" name="phone" value="{{Input::old('phone')}}">
						<span>Phone (optional)</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="" name="company" value="{{Input::old('company')}}">
						<span>Company (optional)</span>
						</div>
					</li>
					<li class="width-100">
						<div class="text-outer">
						<textarea class="text-filed" name="message" value="{{Input::old('message')}}"></textarea>
						<span>Message</span>
						</div>
					</li>
					<li class="width-100">
						<button type="submit" class="btn-icon"><span class="btn-download">send message</span><span class="download-icon"><img src="{{url('/images/send-message.png')}}" alt="subscribe"></span></button>
					</li>
				</ul>
			</div>
		</div>
	</section>
	@include('partials.frontendparts.contactpopup')
@endsection