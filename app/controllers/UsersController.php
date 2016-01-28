<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	public function make()
	{
		try {
			
			$user = new User();

			$user->email = Input::get('email');
			$user->user_name = Input::get('user_name');
			$user->password = Hash::make( Input::get('password') );
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->zip_code = Input::get('zip_code');
			$user->role = 1;

			$user->save();
		} catch (Exception $e) {
			
			return Response::json($e);
		}

		return Response::json( 'woot' );
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$data['password'] = Hash::make( Input::get('password') );


		$validator = Validator::make( $data , User::$rules);

		if ($validator->fails())
		{
			return Response::json( $validator->message() );
		}

		$user = new User();

		$user->email = Input::get('email');
		$user->user_name = Input::get('user_name');
		$user->password = Hash::make( Input::get('password') );
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->zip_code = Input::get('zip_code');
		$user->role = 1;

		$user->save();

		Auth::login($user);
		return Response::json( Auth::user() );
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);

		return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

	/**
	 *	@return the logged in user
	 */
	public function getInfo()
	{
		return Response::json( Auth::user() );
	}

	/**
	 *	@return the logged in users pitches
	 */
	public function getPitchIds()
	{
		return Response::json( Auth::user()->pitches );
	}

}
