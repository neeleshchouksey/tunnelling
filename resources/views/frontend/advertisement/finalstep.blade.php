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
						<img src="{{asset('images/message-send.png')}}" alt="message send">
						<h3>You are almost there!</h3>
						<p>WE HAVE SENT INSTRUCTIONS OF HOW TO COMPLETE YOUR ADVERTISING RESERVATION TO YOUR EMAIL.<br>
Complete process now.</p>
				</div>
				<div class="step-btn text-center">
					<a href="{{url('advertise/firststep')}}">
						<button  class="btn-icon shadow-none"><span class="btn-download">check email </span><span class="download-icon"><img src="{{asset('/images/check-mail.png')}}" alt="download-btn"></span></button>
					</a>
				</div>
				
				
				
			</div>
		</div>
	  </section>
	@endsection