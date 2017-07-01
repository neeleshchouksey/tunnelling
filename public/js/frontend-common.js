$(document).ready(function(){
	
	function init() {
  //document.getElementsByTagName(form).reset();
}
window.onload = init;

});
	
//$('input[type="checkbox"]').click(function() {
$(document).on('change','.product-list > label > input[type="checkbox"]',function(){
	
    if (this.checked) {
		$(this).parent().parent().addClass('show');
		$('.step-btn .btn-icon').removeAttr('disabled');
		$('#step-1').addClass('current');
    }
	else{

		$(this).parent().parent().removeClass('show');
		$('.step-btn > form > .btn-icon').attr('disabled','true');
	}		
});

// increase or decreaseproduct quantity
$(document).on('click','.btnclic',function(){
	if($(this).attr('id')== 'plusBTn'){
		var qty = $(this).prev('.qty').val();
		qty++;
		$(this).prev().val(qty);
	}
	if($(this).attr('id')== 'minusBTn'){
		var qty=$(this).prevAll('.qty').val();
		(qty > 0 )?qty--:qty;
		$(this).prevAll('.qty').val(qty);
	}

});

//
$(document).on('click','.step-btn > form > .btn-icon',function(e){
	e.preverntDefault();
	$("#product-form").submit(function( event ) {
	
  		console.log( $( this ).serializeArray() );
  		event.preventDefault();
		$.ajax({
		  method: "get",
		  url: window.location.hostname+'/advertise/secondstep',
		  data: $( this ).serializeArray() 
		});
		
	});
	
	

});
	
	

