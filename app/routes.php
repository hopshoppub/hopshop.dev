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
Route::get('/test/ratings', 'HomeController@testRatings');
Route::get('/testing', 'HomeController@testing');
Route::get('/test/{offset?}', 'HomeController@test');
Route::get('/test2', 'HomeController@test2');
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
Route::get('/users/info', 'UsersController@getInfo');
Route::resource('/users', 'UsersController');

/*
 *		Brewery Routes
 */
Route::resource('/breweries', 'BreweriesController');

Route::get('/beers/{id}/{rating}', 'RatingsController@storeRating');





