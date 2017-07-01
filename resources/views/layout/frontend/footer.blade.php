<footer class="footer">
			<div class="container">
				<div class="footer-block footer-logo">
					<div class="logo-footer"><a href="#"><img src="{{url('/images/footer-logo.png')}}" alt="logo"></a></div>
					<div class="footer-link">
						<ul>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<div class="footer-block footer-link">
					<h4>Navigation</h4>
					<ul>
						<li class="current-page"><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{url('/about')}}">About</a></li>
						<li><a href="{{url('/advertise')}}">Advertise</a></li>
						<li><a href="{{url('/subscribe')}}">subscribe</a></li>
						<li><a href="{{url('contact')}}">Contacts</a></li>
					</ul>
				</div>
				<div class="footer-block footer-contact">
					<h4>Contacts</h4>
					<div class="footer-addrees">
					<img src="{{url('/images/map-pin.png')}}" alt="Address"><p>34 Elthorne Rd, Islington,
London N19 4AG</p>
					</div>
					<div class="footer-addrees">
					<img src="{{url('/images/message-icon.png')}}" alt="message"><a href="mailto:journalsint.@icloud">journalsint.@icloud</a>
					</div>
					<div class="footer-addrees">
					<img src="{{url('/images/phone-address.png')}}" alt="message"><a href="tel:+44 207 272 8444">442072728444</a>
					</div>
				</div>
				<div class="footer-block footer-subscribe">
					<h4>Latest news</h4>
					<div class="text-outer">
								<input class="text-filed" placeholder="" type="text">
									<span>Email</span>
					<button type="submit"><img src="{{url('/images/subscribe-arrow.png')}}" alt="subscribe"></button>
					</div>
					<div class="download-latest">
						<h4>download latest issue</h4>
						<a href="#" class="btn-download">download PDF</a>
					</div>
					
				</div>
			</div>
	  </footer>
	  <section class="footer-bottom text-center">
	  	<div class="container"><p>&copy; Tunnelling International 2017 – All Right Reserved</p></div>
	  </section>
	  <div class="popup" id="subscribe-popup" style="display:none;">
	  		<div class="overlay">
		  		<div class="popup-content">
					<div class="close-btn"><a href=""><img src="{{url('/images/close-icon.png')}}"></a></div>
					<div class="text-center top-text">
						<h3>Subscribe to download pdf</h3>
						<p>We will send you link to download our latest issue in PDF</p>
					</div>
					
			<form>
						<div class="form-row">
							<div class="sub-text">
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text">
									<span>Email</span>
								</div>
								</div>
							<div class="sub-btn">
								<button type="submit" class="btn-icon shadow-none"><span class="btn-download">subscribe </span><span class="download-icon"><img src="{{url('images/subscribe.png')}}" alt="subscribe"></span></button>
							</div>
							
						</div>
							<p class="gurantee"><img src="{{url('images/lock-gray.png')
							}}" alt="lock"> No SPAM Guarantee</p>
					</form>
			
				</div>
		  
		  	</div>
	  </div>
	  <div class="popup" id="send-message" style="display:none;">
	  		<div class="overlay">
		  		<div class="popup-content">
					<div class="close-btn"><a href=""><img src="{{url('/images/close-icon.png')}}"></a></div>
					<div class="text-center top-text">
						<img src="{{url('images/message-send.png')}}" alt="message send">
						<h3>Your message has been sent</h3>
						<p>Thank you for your message! We will reply shortly.</p>
					</div>
				</div>
		  	</div>
	  </div>

		@if(session()->has('subscribe')) 
		<div class="popup" id="send-suscribe" style="display:{{session()->get('display') or 'none'}};">
	  		<div class="overlay">
		  		<div class="popup-content">
					<div class="close-btn"><a href=""><img src="{{url('/images/close-icon.png')}}"></a></div>
					<div class="text-center top-text">
						<img src="{{url('/images/message-send.png')}}" alt="message send">
						<h3>Acknowledgment has been sent to {{ session()->get('email') }}</h3>
						<p>Thank you for your message!</p>
					</div>
				</div>
		  	</div>
		</div>
		@endif
	  <!-- ~GK SCRIPT CALLING -->
	  <script src="{!! asset('js/jquery.min.js') !!}"></script>
	  <script src="{!! asset('js/frontend-common.js') !!}"></script>
