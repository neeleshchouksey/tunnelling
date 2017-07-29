$(document).ready(function(){	

	if($(".help-block + .text-outer .text-filed").length >0){
	
		$('html,body').animate({ scrollTop: $(".help-block + .text-outer .text-filed").offset().top-100},
        'slow');
       
        
	}
	else if($('.right-form .danger_alert').length>0){
		$('html,body').animate({ scrollTop: $(".danger_alert").offset().top-100},
        'slow');
	}
	else if($(".danger_alert").length >0){
	
		
        $('html,body').animate({ scrollTop: $(".danger_alert").offset().top},
        'slow');
        
	}
	

	function init() {
  		//document.getElementsByTagName(form).reset();
	}
	window.onload = init;
	//calculateTotal();
	
	$('.nav-open').on('click',function(){
		$('body').toggleClass('menu-open');
		$('.header-right').slideToggle('slow');
	});
	$('.text-filed').each(function(){

  		if($(this).val().length > 0){

    		$(this).parent().addClass('done');
    
  		}
  
  		else{
    		$(this).parent().removeClass('done');

  		}
  
	});
	

	$('.text-filed').blur(function(){

		//alert('test');
  		if($(this).val().length > 0){

    		$(this).parent().addClass('done');
    
  		}
  
  		else{
    		$(this).parent().removeClass('done');

  		}
  
	});
	
});
	

$(document).on('change','.product-list > label > input[type="checkbox"]',function(){	
	var parent 	= 	$(this).parent().parent();
    if(this.checked) {		
		parent.addClass('show');
		$('#step-1').addClass('current');
		if(parent.find('.custom-checkbox').first().prop('disabled')==false){
			parent.find('.custom-checkbox').first().prop('checked',true);	
		}	
    }
	else{
		parent.removeClass('show');
		parent.find('.custom-checkbox').prop('checked',false);		
	}
	isselectproduct();
	ischeckboxset();		
	
});

$(document).on('click','.text-filed',function(){
	$("#second-step-button").removeAttr('disabled');
});



// increase or decreaseproduct quantity
$(document).on('click','.btnclic',function(){
	if($(this).prevAll('.qty').attr('type')!= 'hidden')
	{
		if($(this).attr('quantity')== 'plus'){
			var qty = $(this).prev('.qty').val();
			qty++;
			$(this).prev().val(qty);
			if($(this).prev('.qty').attr('get_url')){

				id = $(this).prev('.qty').attr('product_id');
							    			
				var sub_elem   = $(".new_subtotal_"+id);
				    			
				$.ajax({
					method: "GET",
				    url: price_url,
				    data:{id:id,action:'update',unit:$(this).prev('.qty').val()},				
				    success: function (data) { 		    	
				    			
					    		var result 	= JSON.parse(data); 
				    			sub_elem.html('&pound;'+result.total);
					    		$("#third-step-total").html('&pound;'+result.gtotal);
					    		$("#third-step-discount").html('&pound;'+result.discount);
							}		    
				});	

			}

		}
		if($(this).attr('quantity')== 'minus'){
			var qty=$(this).prevAll('.qty').val();
			(qty > 0 )?qty--:qty;
			$(this).prevAll('.qty').val(qty);
			if($(this).prevAll('.qty').attr('get_url')){
				id 			= $(this).prevAll('.qty').attr('product_id');			
				var sub_elem   = $(".new_subtotal_"+id);
				    			
				$.ajax({
					method: "GET",
				    url: price_url,
				    data:{id:id,action:"update",unit:$(this).prevAll('.qty').val()},				
				    success: function (data) { 		    	
					    		var result 	= JSON.parse(data); 
				    			sub_elem.html('&pound;'+result.total);

					    		$("#third-step-total").html('&pound;'+result.gtotal);
					    		$("#third-step-discount").html('&pound;'+result.discount);
							}		    
				});	

			}


		}
	}
});



$(document).on('click','#first-step-button',function(){
	
	var base_url 			= 	$("#product_display_form").attr('action');
	var token     			=	$("input[name='_token']").val();
	var id = []; var year=[]; var qty=[];var j=0;
	var product =[];
	//ajax to add product

	$('.show > .year-publication > label > .custom-checkbox').each(function(index,value){

		if($(this).is(":checked")){
			product[j] 				=	{};
			product[j].id		=	$(this).attr('pr_id');
			product[j].year		=	$(this).attr('year');
			product[j].qty 		= 	($(this).next().children('.choice').children('.qty').val()==undefined)? null: $(this).next().children('.choice').children('.qty').val();
			j++;
		}
	});

	console.log(product);
	$.ajax({
		method: "post",
	    url: base_url,
	    data:{_token:token,product:product},
	    success: function (data) { 		    	
	    		if(data=='secondstepview'){
					window.location = 'secondstepview';	    			
	    		}
			}							    
	});		
});


$(document).on('change','.qty',function(){
	id = $(this).attr('product_id');
	var sub_elem   = $(".new_subtotal_"+id);		    			
	$.ajax({
			method: "GET",
		    url: price_url,
		    data:{id:id,action:'update',unit:$(this).val()},				
		    success: function (data) { 
			    		var result 	= JSON.parse(data); 
		    			sub_elem.text(result.total);
			    		$("#third-step-total").text('$'+result.gtotal);
			    		$("#third-step-discount").text('$'+result.discount);
					}		    
		});	
});
// remove products on click delete.
$(document).on('click',".delete-icon > a",function(){
   var id =  $(this).attr('product_id');
   var parent= $(this);
   $.ajax({
				method: "GET",
			    url: price_url,
			    data:{id:id,action:"delete"},				
			    success: function (data) { 		
			    		var result 	= JSON.parse(data); 
			    		parent.closest('.table-row').remove();
			    		$("#third-step-total").text('$'+result.total);
			    		$("#third-step-discount").text('$'+result.discount);
						}		    
			});	


});

$(document).on('click','.custom-checkbox',function(){
	ischeckboxset();
});
// calculate price after deduct discount
function calculatePercantage(mixprice,discount){
	price 		= parseInt(mixprice.replace('$',''));
	discount	= parseInt(mixprice.replace('%',''));
	var total = (price + ((price*discount)/100)).toFixed(2);
	return total;
}

function calculatePrice(quantity,unitprice){
	quantity 		= parseInt(quantity);
	unitprice		= parseInt(unitprice);
	var total 		= (quantity*unitprice).toFixed(2);
	return total;
}

function calculateTotal(){
	var total=0;
	$(".sub-total").each(function(i,v){

		total= parseInt(total)+parseInt($(this).text());
		
		$("#third-step-total").text('$'+total);
	});
}


function ischeckboxset(){
	$('.year-publication > label > .custom-checkbox').each(function(index,value){
		var qty = $(this).next().children('.choice').children('.qty');
		if($(this).is(":checked")){
			if(qty.val() == 0||qty.val() == '0'){
				qty.val('1');
			}
		}
		else{
			qty.val('0');
		}
	});
}

function isselectproduct(){
	var i = 0;
	$('.product-list > label > input[type="checkbox"]').each(function ( index,value){
		if($(this).is(':checked')){
			i++;
		}
	});
	if(i > 0){
		$("#first-step-button").removeAttr('disabled');
	}
	else{
		$('#first-step-button').attr('disabled','true');
	}
}