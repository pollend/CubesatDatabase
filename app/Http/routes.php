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


Route::get('satellite/', 'SatelliteController@index');
Route::get('satellite/{id}/single', 'SatelliteController@single');
Route::get('satellite/{id}/modify', 'SatelliteController@modify');
Route::get('satellite/{id}/history', 'SatelliteController@history');
Route::resource('api/satellites', 'SatelliteAPIController');

Route::get('component/', 'ComponentController@index');
Route::get('component/{id}/single', 'ComponentController@single');
Route::get('component/{id}/modify', 'ComponentController@modify');
Route::get('component/{id}/history', 'ComponentController@history');


Route::get('vendor/', 'VendorController@index');
Route::get('vendor/{id}/single', 'VendorController@single');
Route::get('vendor/{id}/modify', 'VendorController@modify');
Route::get('vendor/{id}/history', 'VendorController@history');


Route::get('mission/', 'MissionController@index');
Route::get('mission/{id}/single', 'MissionController@single');
Route::get('mission/{id}/modify', 'MissionController@modify');
Route::get('mission/{id}/history', 'MissionController@history');

Route::get('spaceport/', 'SpaceportController@index');
Route::get('spaceport/{id}/single', 'SpaceportController@single');
Route::get('spaceport/{id}/modify', 'SpaceportController@modify');
Route::get('spaceport/{id}/history', 'SpaceportController@history');


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
