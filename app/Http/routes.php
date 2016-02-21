<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});


Route::resource('satellite', 'SatelliteController');
Route::resource('satellite/{id}/single', 'SatelliteController@single');
Route::resource('satellite/{id}/modify', 'SatelliteController@modify');
Route::resource('satellite/{id}/history', 'SatelliteController@history');


Route::resource('component', 'ComponentController');
Route::resource('component/{id}/single', 'ComponentController@single');
Route::resource('component/{id}/modify', 'ComponentController@modify');
Route::resource('component/{id}/history', 'ComponentController@history');


Route::resource('vendor', 'VendorController');
Route::resource('vendor/{id}/single', 'VendorController@single');
Route::resource('vendor/{id}/modify', 'VendorController@modify');
Route::resource('vendor/{id}/history', 'VendorController@history');


Route::resource('mission', 'MissionController');
Route::resource('mission/{id}/single', 'MissionController@single');
Route::resource('mission/{id}/modify', 'MissionController@modify');
Route::resource('mission/{id}/history', 'MissionController@history');

Route::resource('spaceport', 'SpaceportController');
Route::resource('spaceport/{id}/single', 'SpaceportController@single');
Route::resource('spaceport/{id}/modify', 'SpaceportController@modify');
Route::resource('spaceport/{id}/history', 'SpaceportController@history');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
