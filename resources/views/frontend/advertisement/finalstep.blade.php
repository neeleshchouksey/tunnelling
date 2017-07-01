@extends('layout.frontend.master')
	@section('content')
	<section class="subpage-banner text-center padding-bottom ">
	  	<div class="container">
			<h1>Advertising reservation</h1>
			<hr>
			<p>Next publication: 2018</p>
		</div>
	  </section>
	 
	  <section class="subscription-included">
	  	<div class="container">
			
			<div class="subscription-form new-message full-width">
				<div class="text-center top-text">
						<img src="{{url('/images/message-send.png')" alt="message send">
						<h3>You are almost there!</h3>
						<p>We have sent instructions of how to finish advertising reservation to your email.<br>
Complete process now.</p>
				</div>
				<div class="step-btn text-center">
					<button href="#" class="btn-icon shadow-none"><span class="btn-download">check email </span><span class="download-icon"><img src="{{url('/images/check-mail.png}}" alt="download-btn"></span></button>
				</div>
				
				
				
			</div>
		</div>
	  </section>
	@endsection