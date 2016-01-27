<?php

class BeersController extends \BaseController {


	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter( 'auth',['except' => ['show'] ] );
	}



	/**
	 * Display a listing of beers
	 *
	 * @return Response
	 */
	public function index()
	{
		$i = 0;
		if (Input::has('search')) {
			$query = Beer::with('brewery')->orderBy('created_at', 'desc');
			$search = Input::get('search');
			$query->where('name', 'like', "%$search%");
			$query->orWhereHas('brewery', function($q){
				$query = Beer::with('brewery');
				$search = Input::get('search');
				$q->where('name','like',"%$search%");
				$beers = $query->get();
			});
			$beers = $query->get();
		} else {
				$query = Beer::with('ratings')->orWhereHas('ratings', function($q) {
				$query = Beer::with('ratings');
				$q->where('rating', '>', '3');
				$beers = $query->get();
			});
				$beers = $query->get();
				$beers->sortByDesc(function($beer) {
					return $beer->rating;
				});
		}
			return View::make('beers.index')->with(['beers' => $beers, 'i' => $i]);
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

		// return Response::json( Input::all() );
		$validator = Validator::make($data = Input::all(), Beer::$rules);

		if ( $validator->fails() )
		{
			return Response::json( $validator->messages() );
		}

		Beer::create($data);

		return Response::json( ['good job' => 'wooot'] );
	}

	/**
	 * Display the specified beer.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$beer = Beer::find($id);
		if ($beer->rating == 3.5) {
			$beer->rating = 0;
		}
		return View::make('beers.show')->with(['beer' => $beer]);
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
		$data = Input::all();
		unset($data['beer_id']);

		$validator = Validator::make($data , Beer::$rules);

		if ($validator->fails())
		{
			return Response::json( $validator->messages() );
		}

		$beer->update($data);
		return Response::json( ['good job' => 'wooot'] );
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
