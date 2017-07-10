<?php

namespace App\Http\Controllers;

use App\Advertise;
use Illuminate\Http\Request;
use App\Customerinfo;
use App\Products;
use Session;
use Cart;
class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.advertisement.index');
    }
    /**
     * Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function firstStep()
    {
        $firststepData = products::all();
        //return view('frontend.advertisement.steps')->with('firststepData',$firststepData);
        return view('frontend.advertisement.firststep')->with('firststepData',$firststepData);
    }
    /**
     *  Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function secondStep(Request $request)
    {
        $custumer_product     =   $request->product;
       // echo "<pre>";
        //print_r($custumer_product);
        //dd($request->product);
        Session::put('product',$custumer_product);
        //$ids= array_column($custumer_product,'id');
        //$products    =   Products::find($ids);
        if(count($custumer_product)>1){
            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => 'Discount 10%',
                'type' => 'promo',
                'target' => 'subtotal',
                'value' => '-10%',
                'attributes' => array( // attributes field is optional
                    
                )
            ));

            Cart::condition($condition);

        }

        foreach ($custumer_product as $key => $value) {
            $qty    =1;
            $product   =   Products::find($value['id']);
            if( $value['qty']!='' || $value['qty']!=0)
                $qty= $value['qty'];
            Cart::add($product->id, $product->name, $product->price, $qty, array('year'=>$value['year']));
            # code...
        }
        

        return "secondstepview";
    }
    public function secondStepView()
    {
        $cartCollection = Cart::getContent();
        ///echo "<pre>";
        //print_r($cartCollection->toArray());
        //die;
        return view('frontend.advertisement.secondstep');
    }
    /**
     *  Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function thirdStep(Request $request)
    {
        $cartCollection = Cart::getContent();
        $data=$cartCollection->toArray();
       
        $data=array_values($data);
        
        $ids= array_column($data,'id');
        $selectProduct = products::find($ids);      
        $total = Cart::getTotal();  
        $cartSubTotal = Cart::getSubTotal();
        $discount     = $cartSubTotal   -   $total;
       
        return view('frontend.advertisement.thirdstep',compact('selectProduct','id','data','total','discount'));
    }
    public function thirdStepSubmit(Request $request)
    {
        $getCustomerInfo       =       Session::get('customerinfo');
        $customerinfo          =       Customerinfo::create($getCustomerInfo);
       // print_r($customerinfo);


        $cartCollection = Cart::getContent();
        $data=$cartCollection->toArray();
        foreach ($data as $key => $value) {
            # code...
            $product    = new   Advertise;
            $product->product_id    =   $value['id'];
            $product->customer_id   =   $customerinfo->id;
            $product->year          =   $value['attributes']['year'];
            $product->qty           =   $value['quantity'];
            $product->save();
        }
        Cart::clear();
        Session::forget('customerinfo');
        return redirect('advertise/finalstep');  
    }
    /**
     *  Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function finalStep()
    {
        
        return view('frontend.advertisement.finalstep');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function show(advertise $advertise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function edit(advertise $advertise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, advertise $advertise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\advertise  $advertise
     * @return \Illuminate\Http\Response
     */
    public function destroy(advertise $advertise)
    {
        //
    }

    public function selectProductrow(Request $request){
        $selectProduct = products::find($request->id);
        //dd($selectProduct);
        return view('partials.frontendparts.productrow')->with('selectProduct',$selectProduct);      
    }
    public function fetchProductprice(Request $request){
        $action     =   $request->action;
        switch ($action) {
            case 'update':

                Cart::update($request->id, array(
                                'quantity' => array('relative' => false,'value' => $request->unit), // so if the current product has a quantity of 4, another 2 will be added so this will result to 6
                            ));
                $selectProduct  = products::find($request->id);
                $unit           = $request->unit;
                $price          = $selectProduct->price;
                $total          = ($unit*$price);
                $gtotal        =     Cart::getTotal();

                $cartSubTotal = Cart::getSubTotal();
                $discount     = $cartSubTotal   -   $gtotal;
                $response     =     array('total' => $total,'gtotal'=>$gtotal,'discount'=>$discount );
                return              json_encode($response);
                //return $total;       
                break;
            case 'delete':
                # code...
              //  Cart::remove($request->id);
                $cartCollection = Cart::getContent();
                if($cartCollection->count()<=1){
                    Cart::clearCartConditions();
                }
                $total        =     Cart::getTotal();

                $cartSubTotal = Cart::getSubTotal();
                $discount     = $cartSubTotal   -   $total;
                $response     =     array('total' => $total,'discount'=>$discount );
                return              json_encode($response);

                break;
            
            default:
                # code...
                break;
        }

    }
}
