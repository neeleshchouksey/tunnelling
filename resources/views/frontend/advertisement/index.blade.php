@extends('layout.frontend.master')
		@section('content')
	<section class="banner">
	  		<div class="container">
		  		<div class="banner-content">
					<div class="left-text">
					<p>Effective way to rich your audience</p>
					<h1>Advertise with us</h1>
						<a href="#" class="btn-icon"><span class="btn-download">reserve ad </span><span class="download-icon"><img src="{{url('images/award-iocn.png')}}" alt="download-btn"></span></a>
					<a href="#" class="bordered-btn">download media kit</a>
					</div>
					<div class="banner-image">
						<img src="{{url('images/advertise-magzine.png')}}" alt="magazines">
					</div>
					<div class="down-arrow">
						<a href="#">
						<span>learn<br>more</span>
						<img src="{{url('images/down-arrow.png')}}">
						</a>
					</div>
				</div>
		  	</div>	
	  </section>
	  <!-- <section class="banner-example">BANNER</section> -->
	  <section class="about-publication">
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
							<p>A MINIMUM OF PRINTED<br>COPIES DISTRIBUTED FREE<br>OF CHARGE</p>
						</div>
					</div>
					<div class="width-50 pull-left">
					<div class="block-content">
							<h3>Free Ppdf <img src="{{url('/images/free-pdf.png')}}"></h3>
							<p>A FREE PDF version will also<br>be distributed and<br>be available to download</p>
						</div>
					</div>
				</div>
			</div>
			<div class="width-50 pull-left padding-left">
				<h2>ABOUT THIS PUBLICATION</h2>
				<hr>
				<p>TUNNELLING INTERNATIONAL 2018 will contain an array of technical articles authored by tunnelling industry innovators and will focus on efficiencies, needs and trends.</p>
				<p>Circulated FREE of charge with a minimum of 7000 printed copies, targeted to key individuals. A FREE PDF version available to subscribe and download.</p>
			
			<p>This glossy printed edition along side a PDF version is a direct form of communication between key personnel worldwide and their suppliers of Plant Machinery, Products and Services.</p>
			</div>
			<div class="clear"></div>
			<div class="key-features text-center">
				<h2>Key readers</h2>
				<hr>
				<p>Every copy individually targeted to key personnel working<br>
within the worlds most prolific Tunnelling Industry Enterprises.</p>
			<div class="features-row">
				<div class="col-5">
					<div class="fetures-content">
						<div class="icon"><img src="{{url('/images/profile.png')}}" alt="profile"></div>
						<h5>Managing & Technical<br>Directors</h5>
					</div>
				</div>
				<div class="col-5">
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
				</div>
			</div>
			</div>
			
			</div>
		
	  </section>
	  <section class="subscribe text-center">
	  		<div class="container">
		  		<h3>Reserve ad now and get<br>
A FREE 6 MONTH LOGO LINK ON OUR WEBSITE</h3>
				<a href="{{url('/advertise/firststep')}}" class="btn-icon"><span class="btn-download">reserve ad </span><span class="download-icon"><img src="{{url('/images/award-iocn.png')}}" alt="download-btn"></span></a>
		    </div>
	  </section>
	  <section class="our-circulation text-center">
	  	<div class="container">
		 	<h2>our circulation</h2>
			<hr>
			<div class="our-circle-map">
				<img src="{{url('/images/our-circle.png')}}" alt="our circle">
			</div>
		 </div>
	  </section>
	 <section class="our-partner text-center padding-top-zero">
	  		<div class="container">
		  		<h2>they are already advertise on our pages</h2>
				<hr>
				<div class="partner-list">
					<ul>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
						<li><a href="#"><img src="{{url('/images/crossrail.png')}}" alt="Crossrail"></a></li>
					</ul>
				</div>
				<a href="{{url('/advertise/firststep')}}" class="btn-icon shadow-none"><span class="btn-download">reserve ad </span><span class="download-icon"><img src="{{url('/images/award-iocn.png')}}" alt="download-btn"></span></a>
		  </div>
	  </section>
@endsection