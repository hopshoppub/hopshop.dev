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
App::bind('Acme\Billing\BillingInteface', 'Acme\Billing\StripeBilling');

/*
 *		Home Routes
 */
Route::get('/test/ratings', 'HomeController@testRatings');
Route::get('/beerlist', 'HomeController@beerList');
Route::get('/beerpage/{offset}/{search?}', 'HomeController@beerPage');
Route::get('/test2', 'HomeController@test2');
Route::post('/facebookLogin/{fb_id}', 'HomeController@fbLogin');
Route::post('/login', 'HomeController@postLogin');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/', 'HomeController@showHome');
Route::get('/beeroftheday', 'BeersController@beerOfTheDay');

/*
 *		Beer Routes
 */
Route::get('/beers/ajax/id/{id}', 'BeersController@getBeerByIdAjax');
Route::resource('/beers', 'BeersController');

/*
 *		Pitch Routes
 */
Route::get('/pitches/ajax/id/{id}', 'PitchesController@getPitchByIdAjax');

Route::get('/pitches/fund/{id}', 'PitchesController@fund');
Route::post('/pitches/fund/{id}', 'PitchesController@postfund');
Route::post('/pitches/updates/{id}', 'PitchesController@postupdate');


Route::get('/seasonal', 'BeersController@seasonal');


Route::resource('/pitches', 'PitchesController');
Route::resource('/contributions/mine', 'ContributionsController');


	
/*
 *		User Routes
 */
Route::get('/user/pitches', 'UsersController@getPitchIds');
Route::get('/users/info', 'UsersController@getInfo');
Route::resource('/users', 'UsersController');

/*
 *		Brewery Routes
 */
Route::resource('/breweries', 'BreweriesController');

Route::get('/beers/{id}/{rating}', 'RatingsController@storeRating');





