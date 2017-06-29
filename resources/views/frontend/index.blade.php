@extends('layout.frontend.master')
@section('content')
	<section class="banner">
		<div class="container">
			<div class="banner-content">
				<div class="left-text">
					<p>A TECHNICAL annual FOR THE </p>
					<h1>TUNNELLING INDUSTRY</h1>
						<a href="#" class="btn-icon"><span class="btn-download">download PDF </span><span class="download-icon"><img src="images/download-pdf.png" alt="download-btn"></span></a>
					<a href="#" class="bordered-btn">subscribe for free</a>
				</div>
				<div class="banner-image">
					<img src="images/magazines.png" alt="magazines">
				</div>
				<div class="down-arrow">
					<a href="#">
					<span>learn<br>more</span>
					<img src="images/down-arrow.png">
					</a>
				</div>
			</div>
		</div>	
	</section>
	  <!-- <section class="banner-example">BANNER</section> -->
	<section class="about-section">
	  	<div class="container">
			<div class="left-image"><img src="images/opened-magazines.png" alt=""></div>
			<div class="about-text">
				<h2>ABOUT<br>tunnelling international</h2>
				<hr>
				<p>Publication release date: <span>April 2018</span></p>
				<p>Containing an array of technical articles authored by tunnelling industry innovators, this glossy annual will review Process, Machinery and Tooling
				technologies and have a focus on efficiencies, needs and trends.</p> 

				<p>This useful edition along side our newsletters and announcements will enable our readers to have access to the latest tunnelling industry innovations and the companies that are able to put these advances into practice.</p> 

				<p>Subscribe for FREE to receive your complimentary PDF version of Tunnelling International and to have access to our newsletters and industry announcements.</p>
			</div>
			<div class="clear"></div>
			<div class="qucik-contact text-center" >
				<div class="col-4">
					<div class="block-content">
						<div class="icon"><img src="images/anouncement.png" alt="announcement"></div>
						<h4>announcements</h4>
						<p>Keep informed with up to date<br>tunnelling industry<br>
						announcements.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="block-content">
						<div class="icon"><img src="images/stay-in-touch.png" alt="announcement"></div>
						<h4>stay in touch with suppliers</h4>
						<p>Access to the world’s leading<br>suppliers of plant machinery,<br>products and services.</p>
					</div>
				</div>
				<div class="col-4">
					<div class="block-content">
						<div class="icon"><img src="images/anouncement.png" alt="announcement"></div>
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
					<form>
						<div class="form-row">
							<div class="sub-text">
								<div class="text-outer">
								<input type="text" class="text-filed" placeholder="">
									<span>Email</span>
								</div>
								</div>
							<div class="sub-btn">
								<button type="submit" class="btn-icon"><span class="btn-download">subscribe </span><span class="download-icon"><img src="images/subscribe.png" alt="subscribe"></span></button>
							</div>
							
						</div>
							<p><img src="images/lock.png" alt="lock"> No SPAM Guarantee</p>
					</form>
				</div>
		    </div>
	</section>
	 <!--  <section class="our-partner text-center">
	  		<div class="container">
		  		<h2>our partners</h2>
				<hr>
				<div class="partner-list">
					<ul>
						<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
						<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
						<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
						<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
						<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
						<li><a href="#"><img src="images/crossrail.png" alt="Crossrail"></a></li>
					</ul>
				</div>
				<p>Want to be on our pages? Tell potential castomers about your products! <a href="#">Advertise on our pages.</a></p>
		  </div>
	  </section> -->
	<section class="contact-us text-center">
	  	<div class="container">
			<h2>Contact us</h2>
			<hr>
			<p>We are here to help. Call us anytime.</p>
			<div class="contact-addresses">
				<p><a href="mailto:journalsint.@icloud"><img src="images/message-address.png"> journalsint.@icloud</a></p>
				<p class="middle-margin"><img src="images/pin-address.png"> j34 Elthorne Rd, Islington,<br>
				London N19 4AG</p>
				<p><a href="tel:442072728444"><img src="images/phone-address.png"> +44 207 272 8444</a></p>
			</div>
			<div class="form-content">
				<ul>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="">
						<span>Name</span>
						</div>
							</li>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="">
						<span>Email</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="">
						<span>Phone</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input type="text" class="text-filed" placeholder="">
						<span>Company (optional)</span>
						</div>
					</li>
					<li class="width-100">
						<div class="text-outer">
						<textarea class="text-filed"></textarea>
						<span>Message</span>
						</div>
					</li>
					<li class="width-100">
						<button type="submit" class="btn-icon"><span class="btn-download">send message</span><span class="download-icon"><img src="images/send-message.png" alt="subscribe"></span></button>
					</li>
				</ul>
			</div>
		</div>
	</section>
@endsection