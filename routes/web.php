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

Route::get('/', function () {
    return view('test');
//    echo "test";
//    Mail::to('mhannah@highlands.edu')->send(new \App\Mail\MarketingRequest());
});

//Client
Route::resource('clients', 'ClientsController');
Route::get('clients/thank_you/{id}', 'ClientsController@thankYou');

//Press Release
Route::resource('press_release', 'PressReleaseController');
Route::get('press_release/marcom_show/{id}', 'PressReleaseController@marcomShow');
Route::get('press_release/customer_show/{id}', 'PressReleaseController@customerShow');

//Design and Printing
Route::resource('design_printing', 'DesignPrintingController');
Route::get('design_printing/marcom_show/{id}', 'DesignPrintingController@marcomShow');
Route::get('design_printing/customer_show/{id}', 'DesignPrintingController@customerShow');

//Photography
Route::resource('photography', 'PhotoController');
Route::get('photography/marcom_show/{id}', 'PhotoController@marcomShow');
Route::get('photography/customer_show/{id}', 'PhotoController@customerShow');

//Videography
Route::resource('videography', 'VideoController');
Route::get('videography/marcom_show/{id}', 'VideoController@marcomShow');
Route::get('videography/customer_show/{id}', 'VideoController@customerShow');

//Presentation
Route::resource('presentation', 'PresentationController');
Route::get('presentation/marcom_show/{id}', 'PresentationController@marcomShow');
Route::get('presentation/customer_show/{id}', 'PresentationController@customerShow');

//Social Media
Route::resource('social_media', 'SocialMediaController');
Route::get('social_media/marcom_show/{id}', 'SocialMediaController@marcomShow');
Route::get('social_media/customer_show/{id}', 'SocialMediaController@customerShow');

//Paid Advertising
Route::resource('paid_advertising', 'PaidAdvertisingController');
Route::get('paid_advertising/marcom_show/{id}', 'PaidAdvertisingController@marcomShow');
Route::get('paid_advertising/customer_show/{id}', 'PaidAdvertisingController@customerShow');

//Event
Route::resource('event', 'EventController');
Route::get('event/marcom_show/{id}', 'EventController@marcomShow');
Route::get('event/customer_show/{id}', 'EventController@customerShow');


Route::resource('admin', 'AdminController');

//Service
Route::get('service', 'ServiceController@index');
Route::get('service/{name}', 'ServiceController@serviceName');
Route::get('by_service', 'ServiceController@byService');
//Route::get('testmail', 'ServiceController@testMail');
//Route::get('services_list', 'ServiceController@servicesList')->middleware('auth');
Route::get('services_list', 'ServiceController@servicesList');

//Comments
Route::post('comments/update', 'CommentsController@update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('paid_advertising', 'AdminController');
