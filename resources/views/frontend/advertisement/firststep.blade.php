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
					<span><img src = "{{url('/images/message-icons.png')}}"></span><a href="mailto:journalsint.@icloud">journalsint.@icloud</a>
				</div>
				<div class="topContact">
					<span><img src="{{url('/images/phone-address-icon.png')}}"></span><a href="tel:442072728444">+44 207 272 8444</a>
				</div>
			</div>
		</div>
		<div class="advertise-box">
			<div class="order-step">
				<ul>
					<li id="step-1" class="current">
						<a href="javascript:void(0)">
							<span class="text">1</span>
							<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
							ad format
						</a>
					</li>
					<li id="step-2">
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
			<p class="choose text-center">Choose your advertising formats:</p>
			<form>
			<div class="product-option">
				<div class="product-list">
					<label>
						<input type="checkbox" name="front-cover">
						<div class="box text-center">
							<span class="checked"><img src="{{url('/images/checked-blue.png')}}"></span>
							<div class="icon"><img src="{{url('/images/front-cover.png')}}"></div>
							<h5 class = "product-heading">Front cover</h5>
							<p class = "product-dimension">123mm x 456mm</p>
							<span class = "product-price">$5750</span>
						</div>					
					</label>
					<div class="year-publication">
						<p>ISSUE</p>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2018 reserved
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2019
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2020
							</div>
						</label>
					
					</div>
				</div>
				
				<div class="product-list">
					<label>
						<input type="checkbox" name="back-cover">
						<div class="box text-center">
							<span class="checked"><img src="{{url('/images/checked-blue.png')}}"></span>
							<div class="icon"><img src="{{url('/images/back-cover.png')}}"></div>
							<h5 class = "product-heading">Back cover</h5>
							<p class = "product-dimension">123mm x 456mm</p>
							<span class = "product-price">$5250</span>
						</div>
					</label>
					<div class="year-publication">
						<p>ISSUE</p>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2018 reserved
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2019
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2020
							</div>
						</label>
					
					</div>
				</div>				
				<div class="product-list">
					<label>
						<input type="checkbox" name="double-page">
						<div class="box text-center">
							<span class="checked"><img src="{{url('/images/checked-blue.png')}}"></span>
							<div class="icon"><img src="{{url('/images/double-cover.png')}}"></div>
							<h5 class = "product-heading">double page</h5>
							<p class = "product-dimension">123mm x 456mm</p>
							<span class = "product-price">$5250</span>
						</div>
					</label>
					<div class="year-publication">
						<p>ISSUE</p>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2018
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
									
								</div>
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2019
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
								</div>
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2020
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
									
								</div>
							</div>
						</label>
					
					</div>
				</div>
				
				<div class="product-list">
					<label>
						<input type="checkbox" name="single-page">
						<div class="box text-center">
							<span class="checked"><img src="{{url('images/checked-blue.png')}}"></span>
							<div class="icon"><img src="{{url('/images/single-page.png')}}"></div>
							<h5 class = "product-heading">single page</h5>
							<p class = "product-dimension">123mm x 456mm</p>
							<span class = "product-price">$3950</span>
						</div>
					</label>
					<div class="year-publication">
						<p>ISSUE</p>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2018
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
									
								</div>
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2019
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
								</div>
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2020
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
									
								</div>
							</div>
						</label>
					
					</div>

				</div>
				
				<div class="product-list">
					<label>
						<input type="checkbox" name="half-page">
						<div class="box text-center">
							<span class="checked"><img src="{{url('/images/checked-blue.png')}}"></span>
							<div class="icon"><img src="{{url('/images/half-page.png')}}"></div>
							<h5 class = "product-heading">half page</h5>
							<p class = "product-dimension">123mm x 456mm</p>
							<span class = "product-price">$2750</span>
						</div>
					</label>
					<div class="year-publication">
						<p>ISSUE</p>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2018
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
									
								</div>
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2019
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
								</div>
							</div>
						</label>
						<label>
							<input type="radio" name="issue">
							<div class="box-radio">
								<span></span>2020
								<div class="choice">
									<input type="text" value="1" class="qty">
									<a href="javascript:void(0)" class="btnclic" id="plusBTn">+</a>
									<a href="javascript:void(0)" class="btnclic" id="minusBTn">-</a>
									
								</div>
							</div>
						</label>
					
					</div>

				</div>					
			</div>
			</form>
			<div class="offer-code text-center">
			 	<div class="coupan">order 2 or more ads and get <span>10% discount</span></div>	
			</div>
			<div class="step-btn text-center">
				<form id="product-form">
					{{ csrf_field() }}
					<input type="hidden" name="test" value="ggg">
					<button  class="btn-icon shadow-none" disabled><span class="btn-download">Next Step </span><span class="download-icon"><img src="{{url('/images/next-step.png')}}" alt="download-btn"></span></button>					
				</form>			
			</div>
		</div>
	</div>
  </section>
  
@endsection