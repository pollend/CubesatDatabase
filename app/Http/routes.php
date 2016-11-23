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

Route::get('{any?}', function () {
    return view('index');
})->where('any', '(?!api/)(?!_debugbar)(.*)');


Route::group(['prefix' => 'api/v1/'], function()
{
		Route::group(['prefix' => 'satellite'],function()
		{
			Route::post('','Api\SatelliteController@postSatellites');
			Route::post('{id}','Api\SatelliteController@postSatellite');
			Route::get('organization/{id}','Api\SatelliteController@getSatellitesByOrganization');
		});

		Route::group(['prefix' => 'mission'],function()
		{
			Route::post('','Api\MissionController@postMissions');
		});

		Route::group(['prefix' => 'vendor'],function()
		{
			Route::get('','Api\VendorController@getVendors');
		});

		// Route::resource('mission','Api\MissionController');
		// Route::resource('vendor','Api\VendorController');
		// Route::resource('component','Api\ComponentController');
		// Route::resource('spaceport','Api\SpaceportController');

		Route::post('login', 'Auth\AuthController@postLogin');
		Route::post('register', 'Auth\AuthController@postRegiser');
		Route::post('verify', 'Auth\AuthController@postValidate');
		Route::post('logout', 'Auth\AuthController@postLogout');

});







//Route::get('auth/register','AuthController@postRegister');

/*
Route::resource('satellite', 'SatelliteController');
Route::get('satellite/{id}/history', 'SatelliteController@history');


Route::resource('spaceport', 'SpaceportController');
Route::resource('component', 'ComponentController');
Route::resource('vendor', 'VendorController');
Route::resource('mission', 'MissionController');

Route::get('spaceport/', 'SpaceportController@home');
Route::get('spaceport/{id}', 'SpaceportController@single');
Route::get('spaceport/{id}/modify', 'SpaceportController@modify');
Route::get('spaceport/{id}/history', 'SpaceportController@history');


Route::get('component/', 'ComponentController@home');
Route::get('component/{id}', 'ComponentController@single');
Route::get('component/{id}/modify', 'ComponentController@modify');
Route::get('component/{id}/history', 'ComponentController@history');


Route::get('vendor/', 'VendorController@home');
Route::get('vendor/{id}', 'VendorController@single');
Route::get('vendor/{id}/modify', 'VendorController@modify');
Route::get('vendor/{id}/history', 'VendorController@history');

Route::get('mission/', 'MissionController@home');
Route::get('mission/{id}', 'MissionController@single');
Route::get('mission/{id}/modify', 'MissionController@modify');
Route::get('mission/{id}/history', 'MissionController@history');
*/

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
