@extends('layout.frontend.master')
@section('content')
	  <section class="subpage-banner padding-bottom text-center">
	  	<div class="container">
			<h1>Subscribe to our newsletter</h1>
			<hr>
			<p>Stay up to date with tunnelling industry latest news and products.</p>
		</div>
	  </section>
	  <section class="subscription-included">
	  	<div class="container">
		   <div class="subscription-form">
		  	<form method="post" action="{{url('/subscribe/store')}}">
						<div class="form-row">
							<div class="sub-text">
								@if ($errors->has('email'))
			                            <span class="help-block">
			                                <strong>{{ $errors->first('email') }}</strong>
			                            </span>
			                    @endif	
								<div class="text-outer">
								<input type="email" class="text-filed" placeholder="" name="email">
								{{ csrf_field() }}
									<span>Email</span>
								</div>
								</div>
							<div class="sub-btn">
								<button type="submit" class="btn-icon shadow-none"><span class="btn-download">subscribe </span><span class="download-icon"><img src="{{url('/images/subscribe.png')}}" alt="subscribe"></span></button>
							</div>							
						</div>
							<p><img src="{{url('/images/lock-gray.png')}}" alt="lock"> No SPAM Guarantee</p>
					</form>
			</div>
			<div class="subscription-included text-center">
				<h3>INCLUDED IN YOUR SUBSCRIPTION</h3>
				<div class="subscription-row">
					<div class="col-4">
						<div class="subscription-block">
							<div class="icon"><img src="{{url('/images/up-do-date.png')}}"></div>
							<h5>Up to date tunnelling<br>industry announcements</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="subscription-block">
							<div class="icon"><img src="{{url('/images/pdf-version.png')}}"></div>
							<h5>Your yearly PDF version of<br>Tunnelling International</h5>
						</div>
					</div>
					<div class="col-4">
						<div class="subscription-block">
							<div class="icon"><img src="{{url('/images/international-newsletter.png')}}"></div>
							<h5>Access to Tunnelling<br>International newsletters</h5>
						</div>
					</div>
				</div>
			</div>
		 </div>
	  </section>


 	

@endsection

