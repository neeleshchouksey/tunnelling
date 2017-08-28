<header class="header">
	<div class="container">
  		<div class="logo">
			<a href="#"><img src="{{url('images/Logo.png')}}" alt="logo"></a>
		</div>
		<div class="mobile-block">
				<span class="nav-open">
				<div class="hamburger hamburger-container">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
				 </div>
				</span>
		</div>
		<div class="header-right">
			<div class="navigation">
				<ul>
					<li class="{{ active(['/'],'current-page') }}"><a href="{{url('/')}}" >Home</a></li>
					<li class="{{ active(['about'],'current-page') }}"><a href="{{url('about')}}" >About</a></li>
					<li class="{{ active(['advertise','advertise/*'],'current-page') }}"><a href="{{url('advertise')}}" >Advertise</a></li>
					<li class="{{ active(['subscribe','subscribe/*'],'current-page') }}"><a href="{{url('subscribe')}}" >subscribe</a></li>
					<li class="{{ active(['contact'],'current-page') }}"><a href="{{url('contact')}}" >Contacts</a></li>
				</ul>
			</div>
			<div class="btn-right">
				<a href="{{url('advertise/firststep')}}" class="btn-icon">
						<span class="btn-download">Reserve Ad </span><span class="download-icon"><img src="{{url('/images/award-iocn.png')}}" alt="download-btn"></span>
				</a>
			</div>
		</div>
  	</div>
</header>