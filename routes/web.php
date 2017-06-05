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
//    return view('welcome');
//    echo "test";
    Mail::to('mhannah@highlands.edu')->send(new \App\Mail\MarketingRequest());
});


Route::resource('clients', 'ClientsController');
Route::resource('press_release', 'PressReleasesController');
Route::get('press_release/admin/{id}', 'PressReleasesController@admin');
Route::resource('design_printing', 'DesignPrintingController');
Route::get('design_printing/admin/{id}', 'DesignPrintingController@admin');
Route::resource('photography', 'PhotoController');
Route::get('photography/admin/{id}', 'PhotoController@admin');
Route::resource('videography', 'VideoController');
Route::get('videography/admin/{id}', 'VideoController@admin');
Route::resource('presentation', 'PresentationController');
Route::get('presentation/admin/{id}', 'PresentationController@admin');
Route::resource('social_media', 'SocialMediaController');
Route::get('social_media/admin/{id}', 'SocialMediaController@admin');
Route::resource('paid_advertising', 'PaidAdvertisingController');
Route::get('paid_advertising/admin/{id}', 'PaidAdvertisingController@admin');
Route::resource('event', 'EventController');
Route::get('event/admin/{id}', 'EventController@admin');
Route::resource('admin', 'AdminController');

Route::get('service', 'ServiceController@index');
Route::get('service/{name}', 'ServiceController@serviceName');
Route::get('by_service', 'ServiceController@byService');
Route::get('testmail', 'ServiceController@testMail');
Route::get('services_list', 'ServiceController@servicesList');

Route::post('update', 'CommentsController@update');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('paid_advertising', 'AdminController');
