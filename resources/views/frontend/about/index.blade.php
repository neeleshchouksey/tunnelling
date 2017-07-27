
	  	@extends('layout.frontend.master')
		@section('content')
	  <section class="subpage-banner text-center">
	  	<div class="container">
			<h1>About Us</h1>
			<hr>
			<p>A technical annual for the tunnelling industry</p>
		</div>
	  </section>
	 
	  <section class="about-section">
	  	<div class="container">
			<div class="left-image"><img src='{{asset("uploads/pages/$about->image")}}' alt=""></div>
			<div class="about-text">
				<h2>{!! nl2br($about->title)!!}</h2>
				<hr>
				<p>Publication release date: <span>April 2018</span></p>
				<p>{!! nl2br($about->text) !!}</p>
			</div>
			<div class="clear"></div>
			
		</div>
	  </section>
	  
	 @endsection