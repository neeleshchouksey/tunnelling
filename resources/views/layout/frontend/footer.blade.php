<footer class="footer">
			<div class="container">
				<div class="footer-block footer-logo">
					<div class="logo-footer"><a href="{{url('/')}}"><img src="{{url('/images/footer-logo.png')}}" alt="logo"></a></div>
					<div class="footer-link">
						<ul>
							<li><a href="{{url('terms')}}">Terms & Conditions</a></li>
							<li><a href="{{url('privacy')}}">Privacy Policy</a></li>
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
					<img src="{{url('/images/map-pin.png')}}" alt="Address"><p>{{$companyInfo->company_address}}</p>
					</div>
					<div class="footer-addrees">
					<img src="{{url('/images/message-icon.png')}}" alt="message"><a href="mailto:{{$companyInfo->company_email}}">{{$companyInfo->company_email}}</a>
					</div>
					<div class="footer-addrees">
					<img src="{{url('/images/phone-address.png')}}" alt="message"><a href="tel:+44 207 272 8444">{{$companyInfo->contact_no}}</a>
					</div>
				</div>
				<div class="footer-block footer-subscribe">
					<h4>subscribe for free</h4>
					@if(Input::old('footersubscribe')=="subscribe")
					@include('layout.frontend.error')
					@endif
					<form action="{{url('/subscribe/store')}}" method="post">
						{{ csrf_field() }}
							<input type="hidden" class="text-filed" placeholder="" name="footersubscribe" value="subscribe">
						<div class="text-outer">
									<input class="text-filed" placeholder="" name="email" type="text">
										<span>Email</span>
						<button type="submit"><img src="{{url('/images/subscribe-arrow.png')}}" alt="subscribe"></button>
					</form>
					</div>
					<div class="download-latest">
						<a href="{{url('/advertise/firststep')}}" class="btn-icon"><span class="btn-download">reserve ad </span><span class="download-icon"><img src="{{url('/images/award-iocn.png')}}" alt="download-btn"></span></a>
						<a href="{{url('/pdf/TUNNELLINGINTMEDIAPACK.pdf')}}" target="_blank" class="btn-download">VIEW MEDIA PACK</a>
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
	  <SCRIPT TYPE="text/javascript">
	  var price_url="{{url('/advertise/fetchproductprice')}}";
	  </SCRIPT>
	  <script src="{!! asset('js/jquery.min.js') !!}"></script>
	  <script src="{!! asset('js/frontend-common.js') !!}"></script>
	  <script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
var slideIndexAdds = 0;
carouselAdds();

function carouselAdds() {
    var i;
    var x = document.getElementsByClassName("add-slides");
    
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndexAdds++;
    if (slideIndexAdds > x.length) {slideIndexAdds = 1} 
    x[slideIndexAdds-1].style.display = "block"; 
    setTimeout(carouselAdds, 2000); // Change image every 2 seconds
}
</script>
