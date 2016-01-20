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
		    // return Redirect::intended('/');
		    $user = [];
			$user['user_id'] = Auth::user()->user_id;
			$user['zip_code'] = Auth::user()->zip_code;
			$user['role'] = Auth::user()->role;

		    return Response::json( $user );
		} else {
			Session::flash('errorMessage' , 'invalid username or password');
		    return Redirect::back();
		}
	}

}
