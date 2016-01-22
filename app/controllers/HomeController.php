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
		// return $fb_id;
		try {
			$user = User::where('facebook_id', $fb_id)->findOrFail();

		} catch (Exception $e) {

			$user = new User();

			$user->facebook_id = $fb_id;
			$user->role = 1;

			$user->save();
			// dd($fb_id);
			$user = User::where('facebook_id', $fb_id)->first();
		}
		Auth::login($user);
		return Response::json( Auth::user() );
			// return Response::json( $user );
	}

}