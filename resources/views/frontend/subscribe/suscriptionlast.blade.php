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
	    <div class="subscription-form new-message">
			<div class="text-center top-text">
				<h3><img src="{{url('/images/message-send.png')}}" alt="message send"> You are subscribed to our newsletter</h3>
			</div>
		</div>
	</div>
</section>
@endsection