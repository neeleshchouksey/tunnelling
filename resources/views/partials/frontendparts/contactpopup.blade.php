@if(\Session::has('contact'))
 	<!-- for popup only-->
	<div class="popup" id="send-contact" >
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
@endif