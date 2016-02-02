<?php

class StylesController extends \BaseController {

	/**
	 * Display a listing of styles
	 *
	 * @return Response
	 */
	public function index()
	{
		if ( Request::ajax() ){
			
			$styles = Style::all();
			return Response::json( $styles );

		} else {

			$styles = Style::all();

			return View::make('styles.index', compact('styles'));
		}
	}

	/**
	 * Show the form for creating a new style
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('styles.create');
	}

	/**
	 * Store a newly created style in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Style::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Style::create($data);

		return Redirect::route('styles.index');
	}

	/**
	 * Display the specified style.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$style = Style::findOrFail($id);

		return View::make('styles.show', compact('style'));
	}

	/**
	 * Show the form for editing the specified style.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$style = Style::find($id);

		return View::make('styles.edit', compact('style'));
	}

	/**
	 * Update the specified style in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$style = Style::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Style::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$style->update($data);

		return Redirect::route('styles.index');
	}

	/**
	 * Remove the specified style from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Style::destroy($id);

		return Redirect::route('styles.index');
	}

}
