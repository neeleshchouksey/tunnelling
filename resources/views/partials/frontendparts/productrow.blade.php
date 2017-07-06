@foreach($selectProduct as $product)
<div class="table-row" product_id="{{$product->id}}" product_price="{{$product->price}}">
	<div class="table-cell delete-icon"><a href="javascript:void(0)"><img src="{{url('/images/delete-icon.png')}}"></a></div>
	<div class="table-cell format-td">
		<div class="product-info">
			<div class="product-icon"><img src='{{url("/images/$product->image_name")}}'></div>
			<div class="product-deail">
				<h5>{{$product->name}} 2018</h5>
				<p>{{$product->dimension}}</p>
			</div>
		</div>
	</div>
	<div class="table-cell quantity-td">
		<div class="quantity-box">
			<div class="choice">
			<input type="text" value="1" class="qty" product_id="{{$product->id}}" get_url="{{url('/advertise/fetchproductprice')}}">
			<a href="javascript:void(0)" class="btnclic" id="plusBTn" quantity= "plus">+</a>
			<a href="javascript:void(0)" class="btnclic" id="minusBTn" quantity= "minus">-</a>
			</div>
		</div>
	</div>
	<div class="table-cell price-td">
		<div class="price">{{$product->price}}</div>
	</div>
	<div class="table-cell subtotal-td">
		<div class="sub-total">{{$product->price}}</div>
	</div>
</div>
@endforeach