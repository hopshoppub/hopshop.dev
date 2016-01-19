<?php

class PitchesController extends \BaseController {

	/**
	 * Display a listing of pitches
	 *
	 * @return Response
	 */
	public function index()
	{
		$pitches = Pitch::all();

		return View::make('pitches.index', compact('pitches'));
	}

	/**
	 * Show the form for creating a new pitch
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('pitches.create');
	}

	/**
	 * Store a newly created pitch in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Pitch::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Pitch::create($data);

		return Redirect::route('pitches.index');
	}

	/**
	 * Display the specified pitch.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// $pitch = Pitch::findOrFail($id);

		return View::make('pitches.show', compact('pitch'));
	}

	/**
	 * Show the form for editing the specified pitch.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pitch = Pitch::find($id);

		return View::make('pitches.edit', compact('pitch'));
	}

	/**
	 * Update the specified pitch in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pitch = Pitch::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Pitch::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$pitch->update($data);

		return Redirect::route('pitches.index');
	}

	/**
	 * Remove the specified pitch from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Pitch::destroy($id);

		return Redirect::route('pitches.index');
	}

}
