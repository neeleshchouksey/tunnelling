<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Advertise;
use Illuminate\Http\Request;
use App\Customerinfo;
use App\Products;
use Session;
use Cart;
use App\Page;
class AdvertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page                   =   Page::where('slug','advertise')->first();
      
        $advertise              =   (object) array();
        $advertise->title       =   $page->section()->where('meta_key','title')->value('meta_value');
        $advertise->text        =   $page->section()->where('meta_key','text')->value('meta_value');
        $advertise->subtitle    =   $page->section()->where('meta_key','subtitle')->value('meta_value');
        $advertise->subtext     =   $page->section()->where('meta_key','subtext')->value('meta_value');
        return view('frontend.advertisement.index',compact('advertise','page'));
    }
    /**
     * Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function firstStep()
    {
        $firststepData = products::all();
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
        Session::put('product',$custumer_product);
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
            $qty        =   1;
            $product    =   Products::find($value['id']);
            if( $value['qty']!='' || $value['qty']!=0)
                $qty= $value['qty'];

            Cart::add(
                        $product->id.'_'.$value['year'], 
                        $product->name, 
                        $product->price, 
                        $qty, 
                        array(  
                                'year'=>$value['year'],
                                'dimension'=>$product->dimension,
                                'quantity'=>$product->quantity,
                                'image'=>$product->image_name
                            )
                    );
            
        }
        

        return "secondstepview";
    }
    public function secondStepView()
    {
        $cartCollection = Cart::getContent();
        return view('frontend.advertisement.secondstep');
    }
    /**
     *  Display a view
     *
     * @return \Illuminate\Http\Response
     */
    public function thirdStep(Request $request)
    {
        $cartCollection =   Cart::getContent();
        $products           =   $cartCollection->toArray();
        $data               =   array_values($products);
        $ids                =   array_column($data,'id');
        $selectProduct      =   products::find($ids);      
        $total              =   Cart::getTotal();  
        $cartSubTotal       =   Cart::getSubTotal();
        $discount           =   $cartSubTotal   -   $total;
       
        return view('frontend.advertisement.thirdstep',compact('selectProduct','id','data','products','total','discount'));
    }
    public function thirdStepSubmit(Request $request)
    {
        $getCustomerInfo       =       Session::get('customerinfo');

        $getCustomerInfo['order_uni_no'] =$this->generateUniqueNo();
        $customerinfo                           =      new Customerinfo;
        $customerinfo->customer_name            =      $getCustomerInfo['customer_name'];
        $customerinfo->customer_email           =      $getCustomerInfo['customer_email'];
        $customerinfo->phone                    =      $getCustomerInfo['phone'];
        $customerinfo->customer_name            =      $getCustomerInfo['customer_name'];
        if($getCustomerInfo['country']!='')
        $customerinfo->country                  =      $getCustomerInfo['country'];
       
        $customerinfo->company_name             =      $getCustomerInfo['company_name'];
        if($getCustomerInfo['job_title']!='')
        $customerinfo->job_title                =      $getCustomerInfo['job_title'];
        $customerinfo->order_uni_no             =      $this->generateUniqueNo();
        $customerinfo->save();

        


        $cartCollection = Cart::getContent();
        $data=$cartCollection->toArray();

        foreach ($data as $key => $value) {
            $product                =   new   Advertise;
            $id                     =   explode('_',$value['id']);
            $product->product_id    =   $id[0];
            $product->customer_id   =   $customerinfo->id;
            $product->year          =   $value['attributes']['year'];
            $product->qty           =   $value['quantity'];
            $product->price         =   $value['price'];
            $product->save();
        }

        $to         =   $customerinfo->customer_email;
        $subject    =   "Reservation Acknowledgement  - ".$customerinfo->order_uni_no;
        $message    =   view('partials.emails.advertiseconfirm');
        $from       =   "sales@tunnellingint.com"; 
        $headers    =   "From: sales@tunnellingint.com" . "\r\n";
        $headers    .= "MIME-Version: 1.0" . "\r\n";
        $headers    .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        $owner_to         =   "sales@tunnellingint.com"; 
        $owner_subject    =   "New Order from Website - ".$customerinfo->order_uni_no;
        $owner_message    =   view('partials.emails.advertiseowner',compact('customerinfo','data'));
        $owner_headers    =   "From:$customerinfo->customer_email" . "\r\n";
        $owner_headers   .=   "MIME-Version: 1.0" . "\r\n";
        $owner_headers   .=   "Content-type:text/html;charset=UTF-8" . "\r\n";
        mail($owner_to , $owner_subject, $owner_message, $owner_headers);
       

        mail($to , $subject, $message, $headers);


        Cart::clear();
        Session::forget('customerinfo');
        return redirect('advertise/finalstep');  
    }
    public function generateUniqueNo(){

        return "TI-ORD-".mt_rand(1,999999);

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
               Cart::remove($request->id);
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
    public function customerInfo(Request $request){
         $validator  =    Validator::make($request->all(), [
                            'customer_name'      =>'required',
                            'customer_email'     =>'required|email',
                            'phone'              =>'required',
                            'company_name'       =>'required',
                            ]);
        if ($validator->fails()) {
            
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput($request->all());
        }
       
        $customerinfo = request(['customer_name','customer_email','phone','country','company_name','job_title']);
        Session::put('customerinfo',$customerinfo);
        return redirect('advertise/thirdstep/');
    }
    public function generateUniqueOrder(){

        return "TI-OR-".mt_rand(1,999999);

    }
}
