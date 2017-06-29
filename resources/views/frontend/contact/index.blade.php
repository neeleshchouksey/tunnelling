@extends('layout.frontend.master')
		@section('content')

	  <section class="subpage-banner padding-bottom text-center">
	  	<div class="container">
			<h1>Contact us</h1>
			<hr>
			<p>We are here to help. Call us anytime.</p>
			<div class="contact-addresses">
				<p><a href="mailto:journalsint.@icloud"><img src="images/message-address.png"> journalsint.@icloud</a></p>
				<p class="middle-margin text-left"><span><img src="images/pin-address.png"></span>j34 Elthorne Rd, Islington,<br>
London N19 4AG</p>
				<p><a href="tel:442072728444"><img src="images/phone-address.png"> +44 207 272 8444</a></p>
			</div>
		</div>
	  </section>
	  <section class="subscription-included">
	  	<div class="container">
		   <div class="subscription-form contact-page">
			
			<div class="form-content">
				<ul>
					<li>
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text">
						<span>Name</span>
						</div>
							</li>
					<li>
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text">
						<span>Email</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text">
						<span>Phone</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text">
						<span>Company (optional)</span>
						</div>
					</li>
					<li class="width-100">
						<div class="text-outer">
						<textarea class="text-filed"></textarea>
						<span>Message</span>
						</div>
					</li>
					<li class="width-100 text-center">
						<button type="submit" class="btn-icon shadow-none"><span class="btn-download">send message</span><span class="download-icon"><img src="images/send-message.png" alt="subscribe"></span></button>
					</li>
				</ul>
			</div>
			</div>
			
		 </div>
	  </section>
	  @endsection