 @php 
    $companyInfo	=	Helper::companyinfo()
@endphp
<div class="top-section">
	<h3>for reservations contact us or fill in the form below:</h3>
	<div class="right-contact">
		<div class="topContact">
			<span><img src = "{{url('/images/message-icons.png')}}"></span><a href="mailto:journalsint.@icloud">{{$companyInfo->company_email}}</a>
		</div>
		<div class="topContact">
			<span><img src="{{url('/images/phone-address-icon.png')}}"></span><a href="tel:442072728444">{{$companyInfo->contact_no}}</a>
		</div>
	</div>
</div>