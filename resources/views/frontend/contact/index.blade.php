@extends('layout.frontend.master')
		@section('content')
		    @php 
      			$companyInfo=Helper::companyinfo()
    		@endphp
   

	  <section class="subpage-banner padding-bottom text-center">
	  	<div class="container">
			<h1>Contact us</h1>
			<hr>
			<p>We are here to help. Call us anytime.</p>
			<div class="contact-addresses">
				<p><a href="mailto:journalsint.@icloud"><img src="{{url('/images/message-address.png')}}"> {{$companyInfo->company_email}}</a></p>
				<p class="middle-margin text-left"><span><img src="{{url('/images/pin-address.png')}}"></span>{{$companyInfo->company_address}}</p>
				<p><a href="tel:442072728444"><img src="{{url('/images/phone-address.png')}}"> {{$companyInfo->contact_no}}</a></p>
			</div>
		</div>
	  </section>
	  <section class="subscription-included">
	  	<div class="container">
		   <div class="subscription-form contact-page">
	  		@include('layout.frontend.error')

	  		
	  	
				<form action="{{url('contact/store')}}" method="post">
					<div class="form-content">
						<ul>
							<li>
								{{ csrf_field() }}
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="name" value="{{Input::old('name')}}">
								<span>Name</span>
								</div>
									</li>
							<li>
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="email" name="email" value="{{Input::old('email')}}">
								<span>Email</span>
								</div>
							</li>
							<li>
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="phone" value="{{Input::old('phone')}}">
								<span>Phone(optional)</span>
								</div>
							</li>
							<li>
								<div class="text-outer">
								<input class="text-filed" placeholder="" type="text" name="company" value="{{Input::old('company')}}">
								<span>Company (optional)</span>
								</div>
							</li>
							<li class="width-100">
								<div class="text-outer">
								<textarea class="text-filed" name="message" >{{Input::old('message')}}</textarea>
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

	@include('partials.frontendparts.contactpopup')
@endsection