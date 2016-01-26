<?php

class RatingsController extends \BaseController {

	/**
	 * Display a listing of ratings
	 *
	 * @return Response
	 */
	public function index()
	{
		$ratings = Rating::all();

		return View::make('ratings.index', compact('ratings'));
	}

	/**
	 * Show the form for creating a new rating
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ratings.create');
	}

	/**
	 * Store a newly created rating in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
 	}
 	public function storeRating($id,$ratingNumber) 
 	{

 		$inputRating = new Rating();
 		$inputRating->user_id = 1;
 		$inputRating->beer_id = $id;
 		$inputRating->rating = $ratingNumber;
 		$inputRating->comment = 'Awesome beer, i would recommend to anyone!';
 		$inputRating->save();
 	}

	/**
	 * Display the specified rating.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$rating = Rating::findOrFail($id);

		return View::make('ratings.show', compact('rating'));
	}

	/**
	 * Show the form for editing the specified rating.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$rating = Rating::find($id);

		return View::make('ratings.edit', compact('rating'));
	}

	/**
	 * Update the specified rating in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rating = Rating::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Rating::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$rating->update($data);

		return Redirect::route('ratings.index');
	}

	/**
	 * Remove the specified rating from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Rating::destroy($id);

		return Redirect::route('ratings.index');
	}

}