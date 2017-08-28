@extends('layout.frontend.master')
@section('content')
	<section class="subpage-banner text-center">
	  	<div class="container">
			<h1>{!! nl2br($privacy->title) !!}</h1>
			<hr>
			<p>{!! nl2br($privacy->subtitle) !!}</p>
		</div>
	</section>
	 
	<section class="about-section">
	  	<div class="container">
			<p>{!! nl2br($privacy->text) !!}</p>
			<div class="clear"></div>
			
		</div>
	</section>
	  
@endsection