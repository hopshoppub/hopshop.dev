<?php

class ContributionsController extends \BaseController {

	/**
	 * Display a listing of contributions
	 *
	 * @return Response
	 */
	public function index()
	{
		$contributions = Contribution::all();

		return View::make('contributions.index', compact('contributions'));
	}

	/**
	 * Show the form for creating a new contribution
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contributions.create');
	}

	/**
	 * Store a newly created contribution in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Contribution::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Contribution::create($data);

		return Redirect::route('contributions.index');
	}

	/**
	 * Display the specified contribution.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contribution = Contribution::findOrFail($id);

		return View::make('contributions.show', compact('contribution'));
	}

	/**
	 * Show the form for editing the specified contribution.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contribution = Contribution::find($id);

		return View::make('contributions.edit', compact('contribution'));
	}

	/**
	 * Update the specified contribution in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$contribution = Contribution::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Contribution::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$contribution->update($data);

		return Redirect::route('contributions.index');
	}

	/**
	 * Remove the specified contribution from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Contribution::destroy($id);

		return Redirect::route('contributions.index');
	}

}
