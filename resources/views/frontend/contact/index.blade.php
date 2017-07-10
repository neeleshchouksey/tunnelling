@extends('layout.frontend.master')
		@section('content')

	  <section class="subpage-banner padding-bottom text-center">
	  	<div class="container">
			<h1>Contact us</h1>
			<hr>
			<p>We are here to help. Call us anytime.</p>
			<div class="contact-addresses">
				<p><a href="mailto:journalsint.@icloud"><img src="{{url('/images/message-address.png')}}"> journalsint.@icloud</a></p>
				<p class="middle-margin text-left"><span><img src="{{url('/images/pin-address.png')}}"></span>j34 Elthorne Rd, Islington,<br>
				London N19 4AG</p>
				<p><a href="tel:442072728444"><img src="{{url('/images/phone-address.png')}}"> +44 207 272 8444</a></p>
			</div>
		</div>
	  </section>
	  <section class="subscription-included">
	  	<div class="container">
	  		@include('layout.frontend.error')
		   <div class="subscription-form contact-page">
				<form action="{{url('contact/store')}}" method="post">
					<div class="form-content">
						<ul>
							<li>
								{{ csrf_field() }}
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="name" >
								<span>Name</span>
								</div>
									</li>
							<li>
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="email" name="email" >
								<span>Email</span>
								</div>
							</li>
							<li>
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="phone" >
								<span>Phone</span>
								</div>
							</li>
							<li>
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="company">
								<span>Company (optional)</span>
								</div>
							</li>
							<li class="width-100">
								<div class="text-outer">
								<textarea class="text-filed" name="message" ></textarea>
								<span>Message</span>
								</div>
							</li>
							<li class="width-100 text-center">
								<button type="submit" class="btn-icon shadow-none"><span class="btn-download">send message</span><span class="download-icon"><img src="{{url('/images/send-message.png')}}" alt="subscribe"></span></button>
							</li>
						</ul>
					</div>
				</form>
			</div>			
		 </div>
	  </section>

	  <!-- for popup only-->
	  <div class="popup" id="send-contact" style="display:none">
	  		<div class="overlay">
		  		<div class="popup-content">
					<div class="close-btn"><a href=""><img src="{{url('/images/close-icon.png')}}"></a></div>
					<div class="text-center top-text">
						<img src="{{url('/images/message-send.png')}}" alt="message send">
						<h3>Your contact information has been sent</h3>
						<p>Thank you for your message! We will reply shortly.</p>
					</div>
				</div>
		  	</div>
	  </div>
	  <!-- popup-end -->
	  @endsection