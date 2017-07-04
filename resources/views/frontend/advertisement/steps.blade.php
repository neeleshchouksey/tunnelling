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
		<div class="advertise-box" id="first-step">
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
			<form id="product_display_form" action="{{url('/advertise/selectproductrow')}}">
			<div class="product-option">
				<div class="product-list">
					<label>
						<input type="checkbox" name="front-cover">
						<div class="box text-center">
							<span class="checked"><img src="{{url('/images/checked-blue.png')}}"></span>
							<div class="icon"><img class="product-image" src="{{url('/images/front-cover.png')}}"></div>
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
							<div class="icon"><img class="product-image" src="{{url('/images/back-cover.png')}}"></div>
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
							<div class="icon"><img class="product-image" src="{{url('/images/double-cover.png')}}"></div>
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
							<div class="icon"><img class="product-image" src="{{url('/images/single-page.png')}}"></div>
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
							<div class="icon"><img class="product-image" src="{{url('/images/half-page.png')}}"></div>
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
				<button  class="btn-icon shadow-none" disabled id="first-step-button"><span class="btn-download">Next Step </span><span class="download-icon"><img src="{{url('/images/next-step.png')}}" alt="download-btn"></span>
				</button>
			</div>
		</div>
		<div class="advertise-box hidden" id="second-step">
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
			
			<form id="customerDetailfrom" action="{{url('/customerinfo/store')}}">
				<div class="form-container container">
					<div class="form-row">					
						<div class="form-column">
							<div class="text-outer">
							{{ csrf_field() }}
							<input class="text-filed" placeholder="" type="text" name="customer_name">
							<span>Name</span>
							</div>
						</div>
						<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="email" name="customer_email">
							<span>Email</span>
							</div>
						</div>
						<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text" name="phone">
							<span>Phone</span>
							</div>
						</div>
						<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text" name="country">
							<span>Country (optional)</span>
							</div>
						</div>
						<div class="company-information">
							<p class="text-center">Enter your company information:</p>
							<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text" name="company_name">
							<span>Company</span>
							</div>
						</div>
							<div class="form-column">
							<div class="text-outer">
							<input class="text-filed" placeholder="" type="text" name="job_title">
							<span>Job title (optional)</span>
							</div>
						</div>
						</div>
					</div>
				</div>
				<div class="step-btn text-center">
					<button href="#" class="btn-icon shadow-none" disabled id="second-step-button"><span class="btn-download">Next Step </span><span class="download-icon"><img src="{{url('/images/next-step.png')}}" alt="download-btn"></span></button>
				</div>
			</form>				
		</div>
		<div class="advertise-box hidden" id="third-step">
			<div class="order-step">
				<ul>
					<li id="step-1" class="current completed">
						<a href="javascript:void(0)">
							<span class="text">1</span>
							<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
							ad format
						</a>
					</li>
					<li id="step-2" class="current completed">
						<a href="javascript:void(0)">
							<span class="text">2</span>
							<span class="icon"><img src="{{url('/images/checked.png')}}" alt=""></span>
							personal information
						</a>
					</li>
					<li id="step-3" class="current">
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
				<div class="product-card-detail">
					<div class="table">
						<div class="table-row">
							<div class="table-cell delete-icon"></div>
							<div class="table-cell format-td">format</div>
							<div class="table-cell quantity-td">quantity</div>
							<div class="table-cell price-td">price</div>
							<div class="table-cell subtotal-td">subtotal</div>
						</div>
						<span id="product_row_start"></span>
						<input type="hidden" id="store_customer_id">
						<!--  product row create here -->
					</div>
					<div class="total-section">
						<div class="pull-right">
							<p>10% discount: <span id="third-step-discount">-$3675</span></p>
							<p class="total">total: <span id="third-step-total">$33 075</span></p>
						</div>
					</div>
				</div>
			</form>
			
			<div class="step-btn text-center">
				<button href="#" class="btn-icon shadow-none"><span class="btn-download">Reserve ad </span><span class="download-icon"><img src="{{url('/images/checked-white.png')}}" alt="download-btn"></span></button>
			</div>
		</div>

	</div>
  </section>
  
@endsection