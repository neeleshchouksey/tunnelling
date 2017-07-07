<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () { return view('frontend.index');});
Route::get('/about', function () { return view('frontend.about.index');});
// ~gk suscribe
Route::get('subscribe', 'SubscribeController@index');
Route::post('subscribe/store', 'SubscribeController@store');
Route::post('subscribe/personaldetail','SubscribeController@personalDetail');
Route::get('subscribe/confirmsubscription/{data}','SubscribeController@confirmSubscription');
// ~gk contact
Route::get ('contact','ContactController@index');
Route::post('contact/store', 'ContactController@store');
// ~gk advertise
Route::get('advertise', 'AdvertiseController@index');
Route::get('advertise/firststep', 'AdvertiseController@firstStep');
Route::post('advertise/secondstep', 'AdvertiseController@secondStep');
Route::get('advertise/thirdstep', 'AdvertiseController@thirdStep');
Route::get('advertise/finalstep', 'AdvertiseController@finalStep');
Route::post('advertise/selectproductrow', 'AdvertiseController@selectProductrow');
Route::get('advertise/fetchproductprice','AdvertiseController@fetchProductprice');
Route::get('advertise/secondstepview','AdvertiseController@secondStepView');
Route::post('customerinfo/store', 'CustomerinfoController@store');



