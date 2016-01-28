<?php
use Carbon\Carbon;
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
	public function seasonal() {
		$query = Beer::with('brewery');
		$query->where('name', 'like', "%spring%");
		$beers = $query->get();

		return View::make('beers.seasonal')->with(['beers' => $beers]);
	}
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
		$beer = Beer::find($id);
		if(!$beer) {
			App::abort(404);
		}
		return View::make('beers.show')->with(['beer' => $beer]);
	}
	public function beerOfTheDay() {

		$date = Configuration::where('name', '=' , 'beer_of_the_day_modification_date')->first();
		$compareDate = 	Carbon::now();
		$compareDate->diffInDates(new Carbon($date->value));
		// if ($compareDate->diffInDates(new Carbon($date->value)) >= 1) 
		// {
		// 	// new beer 
  //           $date->value = $compareDate->format();
  //           $date->save();
		// }

		// $beers = Beer::with('brewery', 'configuration')->get();
		// $beerArray = [];
		// foreach ($beers as $beer) {
		// 	$beer->aveRating = $beer->rating;
		// 	if ($beer->aveRating > 3.5) {
		// 	 	array_push($beerArray, $beer);
		// 	}
		// }
		// 	$maxNumber = sizeof($beerArray) - 1;
		// 	$randomBeer = range(1,$maxNumber);
		// 	shuffle($randomBeer);
		// 	$beer = ($beerArray[$randomBeer[0]]);

		return View::make('beers.beer-of-the-day')->with(['date' => $date]);
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
