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
    echo "test";
});


Route::resource('clients', 'ClientsController');
Route::resource('press_releases', 'PressReleasesController');

Route::get('service', 'ServiceController@index');