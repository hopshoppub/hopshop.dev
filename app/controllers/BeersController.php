<?php

class BeersController extends \BaseController {

	/**
	 * Display a listing of beers
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Input::has('search')) {
			$query = Beer::with('brewery')->orderBy('created_at', 'desc');
			$search = Input::get('search');
			$query->where('name', 'like', "%$search%");
			$query->orWhereHas('brewery', function($q){
				$query = Beer::with('brewery');
				$search = Input::get('search');
				$q->where('name','like',"%$search%");
				$beers = $query->paginate(10);
			});
			$beers = $query->paginate(10);
		} else {
			$beers = Beer::with('brewery')->orderBy('created_at','desc')->paginate(10);
		}
			return View::make('beers.index')->with(['beers' => $beers]);
	}

	/**
	 * Show the form for creating a new beer
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('beers.create');
	}

	/**
	 * Store a newly created beer in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Beer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Beer::create($data);

		return Redirect::route('beers.index');
	}

	/**
	 * Display the specified beer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$beer = Beer::findOrFail($id);

		return View::make('beers.show', compact('beer'));
	}

	/**
	 * Show the form for editing the specified beer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$beer = Beer::find($id);

		return View::make('beers.edit', compact('beer'));
	}

	/**
	 * Update the specified beer in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$beer = Beer::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Beer::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$beer->update($data);

		return Redirect::route('beers.index');
	}

	/**
	 * Remove the specified beer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Beer::destroy($id);

		return Redirect::route('beers.index');
	}

}
