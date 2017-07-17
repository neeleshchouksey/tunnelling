<div class="table-row" product_id="{{$product['id']}}" product_price="{{$product['price']}}">
	<div class="table-cell delete-icon"><a href="javascript:void(0)"  get_url="{{url('/advertise/fetchproductprice')}}" product_id="{{$product['id']}}"><img src="{{url('/images/delete-icon.png')}}"></a></div>
	<div class="table-cell format-td">
		<div class="product-info">
			<div class="product-icon"><img src='{{asset("images/".$product["attributes"]["image"])}}'></div>
			<div class="product-deail">
				<h5>{{$product['name']}} {{$product['attributes']['year']}}</h5>
				<p>{{$product['attributes']['dimension']}}</p>
			</div>
		</div>
	</div>
	<div class="table-cell quantity-td">
		<div class="quantity-box">
			<div class="choice">
			
			@if($product['attributes']['quantity']>0)
				<input type="text" value="{{($product['attributes']['quantity']>1)?	$product['attributes']['quantity']:'1' }}" class="qty" product_id="{{$product['id']}}" get_url="{{url('/advertise/fetchproductprice')}}">
			@else
				<input type="hidden" value="1" class="qty" product_id="{{$product['id']}}" get_url="{{url('/advertise/fetchproductprice')}}"> 1
			@endif
			<a href="javascript:void(0)" class="btnclic" id="plusBTn" quantity= "plus">+</a>
			<a href="javascript:void(0)" class="btnclic" id="minusBTn" quantity= "minus">-</a>
			</div>
		</div>
	</div>
	<div class="table-cell price-td">
		<div class="price">£{{$product['price']}}</div>
	</div>
	<div class="table-cell subtotal-td">
		<div class="sub-total new_subtotal_{{$product['id']}}">£{{($product['quantity'] > 0)?($product['price'] * $product['quantity']):$product['price']}}</div>
	</div>
</div>
