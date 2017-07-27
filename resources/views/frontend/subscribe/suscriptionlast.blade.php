@extends('layout.frontend.master')

@section('content')
<section class="subpage-banner padding-bottom text-center">
	<div class="container">
		<h1>{!! nl2br($subscribe->title)!!}</h1>
		<hr>
		<p>{!! nl2br($subscribe->text)!!}</p>
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