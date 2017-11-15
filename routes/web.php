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
Route::get('/', 'HomeController@index');
Route::get('/about', 'AboutusController@index');
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
Route::post('advertise/thirdstepsubmit', 'AdvertiseController@thirdStepSubmit');
Route::get('advertise/finalstep', 'AdvertiseController@finalStep');
Route::post('advertise/selectproductrow', 'AdvertiseController@selectProductrow');
Route::get('advertise/fetchproductprice','AdvertiseController@fetchProductprice');
Route::get('advertise/secondstepview','AdvertiseController@secondStepView');
Route::post('advertise/customerinfo', 'AdvertiseController@customerInfo');
Route::resource('terms', 'TermsController');
Route::resource('privacy', 'PrivacyController');
// admin

// Route::get('/admin', function () { return view('admin.login');});
// Route::post('/admin/dashboard', 'AdminLoginController@authenticate');
// Route::get('/admin/dashboard', 'AdminLoginController@adminDashboard');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::group(['middleware' => 'admin.auth'], function() {

   		 Route::resource('dashboard', 'DashboardController');
   		 Route::resource('advertiser', 'AdvertiserController');
   		 Route::get('advertisers/ajax', 'AdvertiserController@ajax');
   		 Route::resource('keyreader', 'KeyReadersController');
   		 Route::get('keyreaders/ajax', 'KeyReadersController@ajax');
   		 Route::resource('partner', 'ParternersController');
   		 Route::get('partners/ajax', 'ParternersController@ajax');
   		 Route::resource('companyinfo', 'CompanyInfoController');
       Route::resource('pages', 'PagesController');
       Route::resource('pages/section', 'PagesSectionController');
       Route::resource('slider', 'SliderController');
       Route::get('slider/addnew/{id}', 'SliderController@addnew');
       Route::get('contact/ajax', 'ContactMessageController@ajax');
       Route::resource('contact', 'ContactMessageController');
       Route::get('subscribe/ajax', 'SubscriptionController@ajax');
       Route::resource('subscribe', 'SubscriptionController');
       Route::get('advertise/ajax', 'AdvertiseController@ajax');
       Route::resource('advertise', 'AdvertiseController');
       Route::resource('profile', 'ProfileController');
       Route::resource('reserve', 'ReserveController');
       Route::get('visitor', 'VisitorInfoController@index');
       Route::get('visitor/ajax', 'VisitorInfoController@ajax');
       Route::get('uniquevisitorpagelist/{id}', 'VisitorInfoController@getVisitedPageList');
       Route::get('visitorpagelist/{id}', 'VisitorInfoController@getVisitedPageList');
       Route::get('allvisitors', 'VisitorInfoController@index');
       Route::get('allvisitors/allVisitorAjax', 'VisitorInfoController@allVisitorAjax');
       Route::get('addslide/ajax', 'AddsController@ajax');
       Route::resource('addslide', 'AddsController');
    }); 
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
