<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function testRatings()
	{

		$beers = Beer::with('ratings')->where('beer_id', '<', 100)->get();

		$beers->sortByDesc(function($beer) {
			return $beer->rating;
		});

		foreach($beers as $beer)
		{
			echo $beer->rating . "<br>";
		}

		die();
	}

	public function testing()
	{
		return View::make('vueTemplates.test');
	}

	public function test($offset)
	{
		// $beers = Beer::with('brewery')->orderBy('created_at','desc')->paginate(10);
		// try {
			
		// $beers = Beer::with('brewery')->paginate(10);
		$beers = Beer::with('brewery')->skip($offset)->take(5)->get();
		// } catch (Exception $e) {
		// 	return $e;
		// }
		return Response::json( $beers );
		return View::make('home');
	}

	public function test2()
	{
		$data = Auth::user();
		$data['template'] = View::make('vueTemplates.testInner');
		return View::make( $data );
	}

	public function showHome()
	{
		return View::make('home');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {

			$user = Auth::user();

		    return Response::json( $user );
		} else {
			

		    return Response::json( ['login_error' => true] );
		}
	}

	public function getLogout()
	{
		Auth::logout();

		if ( Auth::user() )
		{
			$response = ['loggedIn' => true];
		} else
		{
			$response = ['loggedIn' => false];
		}
		return Response::json( $response );
	}

	public function fbLogin( $fb_id ) 
	{
		try {
			$user = User::where('facebook_id','=', $fb_id)->firstOrFail();
		} catch (Exception $e) {

			$user = new User();

			$user->facebook_id = $fb_id;
			$user->role = 1;

			$user->save();
			$user = User::where('facebook_id', $fb_id)->first();
		}
		Auth::login($user);
		return Response::json( Auth::user() );
	}

}