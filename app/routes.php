<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
 *		Home Routes
 */
Route::post('/facebookLogin/{fb_id}', 'HomeController@fbLogin');
Route::post('/login', 'HomeController@postLogin');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/', 'HomeController@showHome');

/*
 *		Beer Routes
 */
Route::resource('/beers', 'BeersController');

/*
 *		Pitch Routes
 */
Route::get('/pitches/fund', 'PitchesController@fund');
Route::resource('/pitches', 'PitchesController');


	
/*
 *		User Routes
 */
Route::post('/users/store', 'UsersController@make');
Route::resource('/users', 'UsersController');

Route::resource('/breweries', 'BreweriesController');

Route::get('/beers/{id}/{rating}', 'RatingsController@storeRating');





