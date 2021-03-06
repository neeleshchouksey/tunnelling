@extends('layout.frontend.master')
		@section('content')
	<section class="banner advertise">
	  		<div class="container">
		  		@foreach($page->slider->slider as $slider)
			<div class="banner-content mySlides">
				<div class="left-text">
					<p>{{$slider->caption}}</p>
					<h1>{{$slider->heading}}</h1>
					<a href="{{url('advertise/firststep')}}" class="btn-icon">
						<span class="btn-download">Reserve Ad </span><span class="download-icon"><img src="{{url('/images/award-iocn.png')}}" alt="download-btn"></span>
					</a>
					<a href="{{asset('pdf/TUNNELLINGINTMEDIAPACK.pdf')}}" target="_blank" class="bordered-btn">View Media Pack</a>
				</div>
				<div class="banner-bottom-text">
				
					<p>Reserve your ad online or contact us:</p>
					@php 
						$companyInfo=Helper::companyinfo()
					@endphp
					<span><a href="tel:442072728444"><img src="{{url('/images/phone-address.png')}}"> {{$companyInfo->contact_no}}</a></span>
					<span><a href="mailto:journalsint.@icloud"><img src="{{url('/images/message-address.png')}}">{{$companyInfo->company_email}}</a></span>
				</div>
				<div class="banner-image ">
					<img src='{{asset("uploads/slider/$slider->slide")}}' alt="magazines">
				</div>
				<div class="down-arrow">
					<a href="#aboutSection">
					<span>learn<br> more</span>
					<img src="{{url('/images/down-arrow.png')}}">
					</a>
				</div>
			</div>
			@endforeach
		  	</div>	
	  </section>
	  <!-- <section class="banner-example">BANNER</section> -->

	  <section class="about-publication" id="aboutSection">
	  	<div class="container">

			<div class="width-50 pull-left padding-right">
				<div class="four-block">
					<div class="width-50 pull-left">
						<div class="block-content">
							<h3>PUBLICATION <img src="{{url('/images/publication.png')}}"></h3>
							<p>Tunnelling International<br>is A technical annual for<br>
								the Tunnelling Industry</p>
						</div>
					</div>
					<div class="width-50 pull-left">
					<div class="block-content">
							<h3>audience <img src="{{url('/images/audiance.png')}}"></h3>
							<p>Our targeted marketing<br>
								practises ensures the<br>relevance of our audience</p>
						</div>
					</div>
					<div class="width-50 pull-left">
					<div class="block-content">
							<h3>7000 copies <img src="{{url('/images/copies.png')}}"></h3>
							<p>MINIMUM OF  7000 PRINTED<br>COPIES DISTRIBUTED FREE<br>OF CHARGE</p>
						</div>
					</div>
					<div class="width-50 pull-left">
					<div class="block-content">
							<h3>Free Pdf <img src="{{url('/images/free-pdf.png')}}"></h3>
							<p>A FREE PDF version will also<br>be distributed and<br>be available to download</p>
						</div>
					</div>
				</div>
			</div>
			<div class="width-50 pull-left padding-left">
				<h2>{!! nl2br($advertise->title)!!}</h2>
				<hr>
				<p>{!! nl2br(Helper::getSitesUrls($advertise->text))!!}</p>
				<!-- <p>TUNNELLING INTERNATIONAL 2018 will contain an array of technical articles authored by tunnelling industry innovators and will focus on efficiencies, needs and trends.</p>
				<p>Circulated FREE of charge with a minimum of 7000 printed copies, targeted to key individuals. A FREE PDF version available to subscribe and download.</p>
			
			<p>This glossy printed edition along side a PDF version is a direct form of communication between key personnel worldwide and their suppliers of Plant Machinery, Products and Services.</p> -->
			</div>
			<div class="clear"></div>
			<div class="key-features text-center">
				<h2>{!! nl2br($advertise->subtitle)!!}</h2>
				<hr>
				<p>{!! nl2br(Helper::getSitesUrls($advertise->subtext))!!}</p>
			<div class="features-row">
				@foreach(Helper::keyreader() as $keyreader)
					<div class="col-5">
						<div class="fetures-content">
							<div class="icon"><img src='{{asset("uploads/keyreader/$keyreader->image")}}' alt="profile"></div>
							<h5>{!! nl2br($keyreader->name)!!}</h5>
						</div>
					</div>
				@endforeach
				<!-- <div class="col-5">
					<div class="fetures-content">
						<div class="icon"><img src="{{url('/images/chief-enginner.png')}}"></div>
						<h5>Chief<br>Engineers</h5>
					</div>
				</div>
				<div class="col-5">
					<div class="fetures-content">
						<div class="icon"><img src="{{url('/images/consultants.png')}}"></div>
						<h5>Consultants</h5>
					</div>
				</div>
				<div class="col-5">
					<div class="fetures-content">
						<div class="icon"><img src="{{url('/images/associate-enginner.png')}}"></div>
						<h5>Associations<br>& Federations</h5>
					</div>
				</div>
				<div class="col-5">
					<div class="fetures-content">
						<div class="icon"><img src="{{url('/images/purchasing-manager.png')}}"></div>
						<h5>Purchasing &<br>Opperations Managers</h5>
					</div>
				</div> -->
			</div>
			</div>
			
			</div>
		
	  </section>
	  <section class="subscribe text-center">
	  		<div class="container">
		  		<h3>{!! nl2br($advertiseoffer->title)!!}</h3>
				<a href="{{url('/advertise/firststep')}}" class="btn-icon"><span class="btn-download">reserve ad </span><span class="download-icon"><img src="{{url('/images/award-iocn.png')}}" alt="download-btn"></span></a>
		    </div>
	  </section>
	  <section class="our-circulation text-center">
	  	<div class="container">
		 	<h2>our circulation</h2>
			<hr>
			<div class="our-circle-map">
				<img src='{{asset("uploads/pages/$advertise->image")}}' alt="our circle">
			</div>
		 </div>
	  </section>
	  @php 
	  $advertisers 		= Helper::advertiser();
	  @endphp
	  
	 <section class="our-partner text-center padding-top-zero">
	  		<div class="container">
	  			@if(count($advertisers)>0)
		  		<h2>they are already advertise on our pages</h2>
				<hr>
				<div class="partner-list">
					<ul>
						@foreach($advertisers as $advertiser)
						<li><a href="#"><img src='{{asset("uploads/advertiser/$advertiser->advertiser")}}' alt="Crossrail"></a></li>

<!-- 						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li> -->
						@endforeach
					</ul>
				</div>
				@endif
				<a href="{{url('/advertise/firststep')}}" class="btn-icon shadow-none"><span class="btn-download">reserve ad </span><span class="download-icon"><img src="{{url('/images/award-iocn.png')}}" alt="download-btn"></span></a>
		  </div>
	  </section>
	  
@endsection