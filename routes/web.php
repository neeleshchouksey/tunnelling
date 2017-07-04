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
// ~gk contact
Route::get ('contact','ContactController@index');
Route::post('contact/store', 'ContactController@store');
// ~gk advertise
Route::get('advertise', 'AdvertiseController@index');
Route::get('advertise/firststep', 'AdvertiseController@firstStep');
Route::get('advertise/secondstep', 'AdvertiseController@secondStep');
Route::get('advertise/thirdstep', 'AdvertiseController@thirdStep');
Route::get('advertise/finalstep', 'AdvertiseController@finalStep');
Route::get('advertise/selectproductrow', 'AdvertiseController@selectProductrow');



