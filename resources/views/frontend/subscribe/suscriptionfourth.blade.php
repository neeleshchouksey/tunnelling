@extends('layout.frontend.master')

@section('content')

<section class="subpage-banner padding-bottom text-center">
	  	<div class="container">
			<h1>Subscribe to our newsletter</h1>
			<hr>
			<p class="text-center">Stay up to date with tunnelling industry latest news and products.</p>
		</div>
	  </section>
	  <section class="subscription-included">
	  	<div class="container">
	  	<form action='{{url("/subscribe/personaldetail")}}' method="post">
	  		
		   <div class="subscription-form new-message width-900">
			   <p>We want to know you better! Just enter your personal information:</p>
				<div class="form-content">
				<ul>
					<li>
						{{ csrf_field() }}
						<input type="hidden" name="id" value="{{$id}}">
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text" name="name">
						<span>Name</span>
						</div>
							</li>
					<li>
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text" name="country">
						<span>Country (optional)</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text" name="company">
						<span>Company</span>
						</div>
					</li>
					<li>
						<div class="text-outer">
						<input class="text-filed" placeholder="" type="text" name="job_title">
						<span>Job title (optional)</span>
						</div>
					</li>
					
					<li class="width-100 text-center">
						<button type="submit" class="btn-icon shadow-none"><span class="btn-download">subscribe </span><span class="download-icon"><img src="{{url('/images/subscribe.png')}}" alt="subscribe"></span></button>
					</li>
				</ul>
			</div>
				
	  	</form>
				
				
				
			</div>
		 </div>
	  </section>
@endsection