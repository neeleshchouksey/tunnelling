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
				<img src="{{url('/images/message-send.png')}}" alt="message send">
				<h3>You are almost there!</h3>
				<p>Please confirm your subscription by clicking link in mail<br>
					we have just sent you.</p>
		</div>
		<div class="step-btn text-center">
			<a href="{{url('/subscribe')}}" class="btn-icon shadow-none"><span class="btn-download">check email </span><span class="download-icon"><img src="{{url('/images/check-mail.png')}}" alt="download-btn"></span></a>
		</div>
	</div>
 </div>
</section>
@endsection