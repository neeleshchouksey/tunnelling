
	  	@extends('layout.frontend.master')
		@section('content')
	  <section class="subpage-banner text-center">
	  	<div class="container">
			<h1>Media Partners</h1>
			<hr>
			<p>A technical annual for the tunnelling industry</p>
		</div>
	  </section>
	 
	  <section class="about-section">
	  	<div class="container">
	  		@foreach($mediaPartners as $mediaPartner)
	  		<div class="media-partners" style="">
				<div class="left-image add-slides_{{$mediaPartner->id}}">
					<a href="<?=$mediaPartner->imageUrl?>" target="_blank">
						<img style="max-height:350px;" src='{{asset("uploads/media-partner/$mediaPartner->image")}}' alt="">
					</a>
				</div>
				@foreach($mediaPartner->addslider as $slider)
				   <div class="left-image add-slides_{{$mediaPartner->id}}">
					<a href="<?=$slider->link?>" target="_blank">
						<img style="max-height:350px;" src='{{asset("uploads/media-partner-slide/$slider->slide")}}' alt="">
					</a>
				</div>
				@endforeach
				<div class="about-text">
					<h2>{!! nl2br($mediaPartner->title)!!}</h2>
					<hr>

					<p>{!! nl2br($mediaPartner->description) !!}</p>
				</div>
				<div class="clear"></div>
			</div>
			<script type="text/javascript">
			 //var slideIndexAdds = 0;
			
             window['slideIndexAdds_'+{{$mediaPartner->id}}] = 0;
          
          
			//carouselAddsran();
            
			window['carouselAdds_'+{{$mediaPartner->id}}]=function() {
			    var i;
			    var sliderId = {{$mediaPartner->id}}
			    var x = document.getElementsByClassName("add-slides_"+sliderId);
			    
			    for (i = 0; i < x.length; i++) {
			      x[i].style.display = "none"; 
			    }
			    window['slideIndexAdds_'+{{$mediaPartner->id}}]++;
			    if (window['slideIndexAdds_'+{{$mediaPartner->id}}] > x.length) {window['slideIndexAdds_'+{{$mediaPartner->id}}] = 1} 
			    x[window['slideIndexAdds_'+{{$mediaPartner->id}}]-1].style.display = "block"; 

			    console.log('slideIndexAdds_'+{{$mediaPartner->id}});
			    console.log(x.length);
			    console.log(window['slideIndexAdds_'+{{$mediaPartner->id}}]);
			    setTimeout(window['carouselAdds_'+{{$mediaPartner->id}}], 5000); // Change image every 2 seconds
			}
			  window['carouselAdds_'+{{$mediaPartner->id}}]();
			</script>
			@endforeach
			
			
		</div>
	  </section>

	 @endsection