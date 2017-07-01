@extends('layout.frontend.master')
	@section('content')
	<section class="subpage-banner text-center adversite">
	  	<div class="container">
			<h1>Advertising reservation</h1>
			<hr>
			<p>Next publication: 2018</p>
		</div>
	  </section>
	 
	  <section class="subscription-included">
	  	<div class="container">
			<div class="top-section">
				<h3>for reservation contact us or fill the form below:</h3>
				<div class="right-contact">
					<div class="topContact">
						<span><img src="{{url('/images/message-icons.png')}}"></span><a href="mailto:journalsint.@icloud">journalsint.@icloud</a>
					</div>
					<div class="topContact">
						<span><img src="{{url('/images/phone-address-icon.png')}}"></span><a href="tel:442072728444">+44 207 272 8444</a>
					</div>
				</div>
			</div>
			<div class="advertise-box">
				<div class="order-step">
					<ul>
						<li id="step-1" class="current completed">
							<a href="javascript:void(0)">
								<span class="text">1</span>
								<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
								ad format
							</a>
						</li>
						<li id="step-2" class="current">
							<a href="javascript:void(0)">
								<span class="text">2</span>
								<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
								personal information
							</a>
						</li>
						<li id="step-3">
							<a href="javascript:void(0)">
								<span class="text">2</span>
								<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
								summary & confirmation
							</a>
						</li>
					</ul>
				</div>
				<p class="choose text-center">Enter your personal information:</p>
				<form>
					<div class="form-container container">
					<div class="form-row">
						
						<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text">
							<span>Name</span>
							</div>
						</div>
						<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="email">
							<span>Email</span>
							</div>
						</div>
						<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text">
							<span>Phone</span>
							</div>
						</div>
						<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text">
							<span>Country (optional)</span>
							</div>
						</div>
						<div class="company-information">
							<p class="text-center">Enter your company information:</p>
							<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text">
							<span>Company</span>
							</div>
						</div>
							<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text">
							<span>Job title (optional)</span>
							</div>
						</div>
						</div>
					</div>
					</div>
				</form>				
				<div class="step-btn text-center">
					<button href="#" class="btn-icon shadow-none" disabled><span class="btn-download">Next Step </span><span class="download-icon"><img src="{{url('/images/next-step.png')}}" alt="download-btn"></span></button>
				</div>
			</div>
		</div>
	  </section>
	@endsection