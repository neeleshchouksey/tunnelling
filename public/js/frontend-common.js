$(document).ready(function(){	
	function init() {
  		//document.getElementsByTagName(form).reset();
	}
	window.onload = init;
	//calculateTotal();
});
	
//$('input[type="checkbox"]').click(function() {
$(document).on('change','.product-list > label > input[type="checkbox"]',function(){	
	var parent 	= 	$(this).parent().parent();
    if(this.checked) {
		
		parent.addClass('show');
		$('#first-step-button').removeAttr('disabled');
		$('#step-1').addClass('current');
		parent.find('input[type="radio"]').first().prop('checked',true);
    }
	else{
		parent.removeClass('show');
		$('#first-step-button').attr('disabled','true');

		parent.find('input[type="radio"]').prop('checked',true);
	}		
	//alert('test');
});

$(document).on('click','.text-filed',function(){
	$("#second-step-button").removeAttr('disabled');
});

//toggle class on checkbox
$(document).on('change','.year-publication > label > input[type="radio"]',function(){
	$(this).closest('.year-publication').find('input[type="radio"]').removeClass('product_select');
	$(this).addClass('product_select');	
});

// increase or decreaseproduct quantity
$(document).on('click','.btnclic',function(){
	
	if($(this).attr('quantity')== 'plus'){
		var qty = $(this).prev('.qty').val();
		qty++;
		$(this).prev().val(qty);
		if($(this).prev('.qty').attr('get_url')){


			//price_url= $(this).prev('.qty').attr('get_url');
			id = $(this).prev('.qty').attr('product_id');
						    			
			var sub_elem   = $(".new_subtotal_"+id);
			    			
			$.ajax({
				method: "GET",
			    url: price_url,
			    data:{id:id,action:'update',unit:$(this).prev('.qty').val()},				
			    success: function (data) { 		    	
			    			//price_elem.text(data);
			    			
				    		var result 	= JSON.parse(data); 
			    			sub_elem.text(result.total);

				    		$("#third-step-total").text('$'+result.gtotal);
				    		$("#third-step-discount").text('$'+result.discount);
						}		    
			});	

		}

	}
	if($(this).attr('quantity')== 'minus'){
		var qty=$(this).prevAll('.qty').val();
		(qty > 0 )?qty--:qty;
		$(this).prevAll('.qty').val(qty);


		if($(this).prevAll('.qty').attr('get_url')){
			//price_url	= $(this).prevAll('.qty').attr('get_url');
			id 			= $(this).prevAll('.qty').attr('product_id');			
			//var price_elem = $(this).parent().parent().parent().next().children().first();
			var sub_elem   = $(".new_subtotal_"+id);
			    			
			$.ajax({
				method: "GET",
			    url: price_url,
			    data:{id:id,action:"update",unit:$(this).prevAll('.qty').val()},				
			    success: function (data) { 		    	
			    			//price_elem.text(data);
			    			sub_elem.text(data);
			    			calculateTotal();
						}		    
			});	

		}


	}
});


//old backup
// $(document).on('click','#first-step-button',function(){
// 	$("#first-step").hide();
// 	$("#second-step").show();
// 	var base_url 			= 	$("#product_display_form").attr('action');
// 	var token     			=	$("input[name='_token']").val();
// 	var id = []; var year=[]; var qty=[]; j=0;
// 	//ajax to add product
// 	$('.year-publication > label > input[type="radio"]').each(function(index,value){
// 		if($(this).hasClass('product_select')){
// 			id[j]		=	$(this).attr('pr_id');
// 			year[j]		=	$(this).attr('year');
// 			qty[j] 		= 	($(this).next().children('.choice').children('.qty').val()==undefined)? null: $(this).next().children('.choice').children('.qty').val();
// 			j++;
// 		}
// 	});
// 	console.log(qty);
// 	$.ajax({
// 		method: "post",
// 	    url: base_url,
// 	    data:{id,_token:token,qty:qty,year:year},				
// 	    success: function (data) { 
// 	    			$('#third-step #product_row_start').after(data); 
// 				}		    
// 	});		
// });
$(document).on('click','#first-step-button',function(){
	//var nexturl				=	$(this).attr('secondurl');
	var base_url 			= 	$("#product_display_form").attr('action');
	var token     			=	$("input[name='_token']").val();
	var id = []; var year=[]; var qty=[];var j=0;
	var product =[];
	//ajax to add product
	$('.year-publication > label > input[type="radio"]').each(function(index,value){
		if($(this).hasClass('product_select')){
			product[j] 				=	{};
			product[j].id		=	$(this).attr('pr_id');
			product[j].year		=	$(this).attr('year');
			product[j].qty 		= 	($(this).next().children('.choice').children('.qty').val()==undefined)? null: $(this).next().children('.choice').children('.qty').val();
			j++;
		}
	});
	//console.log(product);
	//product = JSON.stringify(product);
	//console.log(product);
	//product = JSON.parse(product);
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


$(document).on('click','#second-step-button',function(){	
	$("#first-step").hide();	
	$('#customerDetailfrom').submit(function(event){
		event.preventDefault();
		var url=$('#customerDetailfrom').attr('action');
		var user_detail = $("#customerDetailfrom").serializeArray();	    
		$.ajax({
			method: "POST",
		    url: url,
		    data:user_detail,				
		    success: function (data) { 		    	
	    		if(data=='thirdstep'){
					window.location = 'thirdstep';	    			
	    		}
			}		    
		});	
	});
});

$(document).on('change','.product-list' ,function(){
	// if($( this ).is( ".show" ))
	// {
	// 	var id					= $(this).attr('product_id');			
	// 	var base_url 			= $("#product_display_form").attr('action');
	// 	var year				= 

	// 	// ajax for product add 
	// 	$.ajax({
	// 		method: "GET",
	// 	    url: base_url,
	// 	    data:{id:id},				
	// 	    success: function (data) { 
	// 	    			$('#third-step #product_row_start').after(data); 
	// 				}		    
	// 	});		
	// }
});
$(document).on('change','.qty',function(){
	
	//console.log($(this).parent().parent().parent().next().children('.price').text());
	//price_url= $(this).attr('get_url');
	id = $(this).attr('product_id');
	console.log(price_url);
	console.log($(this).parent().parent().parent());
		    			
		    			
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
		    			//calculateTotal();
					}		    
		});	
});
// remove products on click delete.
$(document).on('click',".delete-icon > a",function(){
	//var price_url= $(this).attr('get_url');
   var id =  $(this).attr('product_id');
  var parent= $(this);
   $.ajax({
				method: "GET",
			    url: price_url,
			    data:{id:id,action:"delete"},				
			    success: function (data) { 		
			    		var result 	= JSON.parse(data); 
			    		console.log(result.total);   	
			    		//$(this).closest('.table-row').remove();
			    		parent.closest('.table-row').remove();
			    		$("#third-step-total").text('$'+result.total);
			    		$("#third-step-discount").text('$'+result.discount);
						}		    
			});	


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
