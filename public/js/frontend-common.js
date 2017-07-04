$(document).ready(function(){	
	function init() {
  		//document.getElementsByTagName(form).reset();
	}
	window.onload = init;
});
	
//$('input[type="checkbox"]').click(function() {
$(document).on('change','.product-list > label > input[type="checkbox"]',function(){
	
    if(this.checked) {
		$(this).parent().parent().addClass('show');
		$('#first-step-button').removeAttr('disabled');
		$('#step-1').addClass('current');
    }
	else{
		$(this).parent().parent().removeClass('show');
		$('#first-step-button').attr('disabled','true');
	}		
});

$(document).on('click','.text-filed',function(){
	$("#second-step-button").removeAttr('disabled');
});

// increase or decreaseproduct quantity
$(document).on('click','.btnclic',function(){
	if($(this).attr('quantity')== 'plus'){
		var qty = $(this).prev('.qty').val();
		qty++;
		$(this).prev().val(qty);
	}
	if($(this).attr('quantity')== 'minus'){
		var qty=$(this).prevAll('.qty').val();
		(qty > 0 )?qty--:qty;
		$(this).prevAll('.qty').val(qty);
	}
});


$(document).on('click','#first-step-button',function(){
	$("#first-step").hide();
	$("#second-step").show();
});
$(document).on('click','#second-step-button',function(){
	
	$("#first-step").hide();
	$("#second-step").hide();
	$("#third-step").show();
	$('#customerDetailfrom').submit(function(event){
		event.preventDefault();
	});
});

$(document).on('change','.product-list' ,function(){
	if($( this ).is( ".show" ))
	{
		var product_src 		= $(this).find('.product-image').attr('src');
		var product_heading 	= $(this).find('.product-heading').text();
		var product_dimension 	= $(this).find('.product-dimension').text();	
		var product_price 		= $(this).find('.product-price').text();		
		var base_url 			= $("#product_display_form").attr('action');
		//var product_price_text	= $(this).find('.product-price').text().replace('$','');
		//var prodcut_price 		= calculatePercantage(product_price_text,10);	
		// ajax for product add 
		$.ajax({
			method: "GET",
		    url: base_url,
		    data:{
		    		product_src:product_src,
		    		product_heading:product_heading,
		    		product_dimension:product_dimension,
		    		product_price:product_price
		    	},				
		    success: function (data) { 
		    		$('#third-step #product_row_start').after(data); 
				}		    
		});		
	}
});





// calculate price after deduct discount
function calculatePercantage(price,discount){
	price 		= parseInt(price);
	discount	= parseInt(discount);
	var discount_value = (price + ((price*discount)/100)).toFixed(2);
	return discount_value;
}

