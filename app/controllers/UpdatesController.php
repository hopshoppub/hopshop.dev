<?php

class UpdatesController extends \BaseController {

	/**
	 * Display a listing of updates
	 *
	 * @return Response
	 */
	public function index()
	{
		$updates = Update::all();

		return View::make('updates.index', compact('updates'));
	}

	/**
	 * Show the form for creating a new update
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('updates.create');
	}

	/**
	 * Store a newly created update in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Update::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Update::create($data);

		return Redirect::route('updates.index');
	}

	/**
	 * Display the specified update.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$update = Update::findOrFail($id);

		return View::make('updates.show', compact('update'));
	}

	/**
	 * Show the form for editing the specified update.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$update = Update::find($id);

		return View::make('updates.edit', compact('update'));
	}

	/**
	 * Update the specified update in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$update = Update::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Update::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$update->update($data);

		return Redirect::route('updates.index');
	}

	/**
	 * Remove the specified update from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Update::destroy($id);

		return Redirect::route('updates.index');
	}

}
