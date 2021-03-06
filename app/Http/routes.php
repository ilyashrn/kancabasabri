<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'guest'], function() {
   Route::get('/', 'Auth\AuthController@login'); 
});

Route::group(['middleware' => 'auth'], function() {
	// Route::get('/home', 'HomeController@index');
   	Route::get('/dashboard', 'DashboardController@index');

   	Route::group(['prefix' => 'dropping'], function() {
		Route::resource('/', 'DroppingController');
		Route::get('/get', 'DroppingController@getAll');
	    Route::get('/table', 'DroppingController@table');
	});

   	Route::get('/tariktunai', 'DroppingController@tarik_tunai');
	Route::get('/pengembalian', 'DroppingController@pengembalian');
	Route::get('/penambahan', 'DroppingController@penambahan');
});

Route::auth();