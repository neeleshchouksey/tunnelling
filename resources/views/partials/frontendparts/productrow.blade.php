<div class="table-row" product_id="{{$selectProduct->id}}" product_price="{{$selectProduct->price}}">
	<div class="table-cell delete-icon"><a href="javascript:void(0)"><img src="{{url('/images/delete-icon.png')}}"></a></div>
	<div class="table-cell format-td">
		<div class="product-info">
			<div class="product-icon"><img src="{{$selectProduct->src}}"></div>
			<div class="product-deail">
				<h5>{{$selectProduct->name}} 2018</h5>
				<p>{{$selectProduct->dimension}}</p>
			</div>
		</div>
	</div>
	<div class="table-cell quantity-td">
		<div class="quantity-box">
			<div class="choice">
			<input type="text" value="1" class="qty" product_id="{{$selectProduct->id}}" get_url="{{url('/advertise/fetchproductprice')}}">
			<a href="javascript:void(0)" class="btnclic" id="plusBTn" quantity= "plus">+</a>
			<a href="javascript:void(0)" class="btnclic" id="minusBTn" quantity= "minus">-</a>
			</div>
		</div>
	</div>
	<div class="table-cell price-td">
		<div class="price">{{$selectProduct->price}}</div>
	</div>
	<div class="table-cell subtotal-td">
		<div class="sub-total">{{$selectProduct->price}}</div>
	</div>
</div>
