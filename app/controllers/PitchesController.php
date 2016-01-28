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
		$data = Input::all();
		$data['user_id'] = Auth::id();

		$validator = Validator::make($data , Pitch::$rules);

		if ( $validator->fails() )
		{
			return Response::json( $validator->messages() );
		}

		Pitch::create($data);

		return Response::json( ['good job' => 'wooot'] );
	}

	/**
	 * Display the specified pitch.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// 	
		$pitch=Pitch::find($id);

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
	 * Update the specified beer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$pitch = Pitch::findOrFail($id);
		$data = Input::all();
		unset($data['pitch_id']);
		$data['user_id'] = Auth::user()->user_id;

		$validator = Validator::make($data , Pitch::$rules);

		if ($validator->fails())
		{
			return Response::json( $validator->messages() );
		}

		$pitch->update($data);

		return Response::json( ['good job' => 'wooot'] );
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
		return Response::json( ['all good' => 'deleted']);
		// return Redirect::route('pitches.index');
	}

	public function fund()
	{
		return View::make('pitches.fund');
	}

	public function getPitchByIdAjax($id)
	{
		return Response::json( Pitch::find($id) );
	}

}
