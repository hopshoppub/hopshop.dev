<?php
use Carbon\Carbon;
class BeersController extends \BaseController {


	public function __construct()
	{
		parent::__construct();

		
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
		// return 'hello';
		$query = Beer::with('ratings')->whereHas('ratings', function($q) {
			$q->where('rating', '>', '3');
		});
		$beers = $query->get();
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
		if(!$beer) {
			App::abort(404);
		}
		return View::make('beers.show')->with(['beer' => $beer]);
	}
	public function beerOfTheDay()
	{

		$dateInDatabase = Configuration::where('name', '=' , 'beer_of_the_day_modification_date')->first();
		$date = Carbon::createFromFormat("Y-m-d", "$dateInDatabase->value");
		$now = Carbon::now();
		$difference = $now->diffInDays($date);
		if ($difference >= 1) 
		{
            $dateInDatabase->value = $now->format('Y-m-d');
            $dateInDatabase->save();
			$beer = $this->generateRandomBeer();
			$selectedBeer = New Configuration;
			$selectedBeer->name = "beer_id";
			$selectedBeer->value = $beer->beer_id;
			$selectedBeer->save();
		} else {
			$beer = Beer::find(Configuration::where('name', '=', 'beer_id')->orderBy('id', 'desc')->first()->value);
		}

		return View::make('beers.beer-of-the-day')->with(['beer' => $beer]);
	}
	public function generateRandomBeer() {
			$query = Beer::with('ratings')->whereHas('ratings', function($q) {
			$q->where('rating', '>', '4');
		});
			$beers = $query->get();
			$beerArray = [];
			foreach ($beers as $beer) {
				$beer->aveRating = $beer->rating;
				if ($beer->aveRating > 3.5) {
				 	array_push($beerArray, $beer);
				}
			}
			$maxNumber = sizeof($beerArray) - 1;
			$randomBeer = range(1,$maxNumber);
			shuffle($randomBeer);
			$beer = $beerArray[$randomBeer[1]];

			return $beer;
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
		// $beers = Beer::with('brewery', 'style')->where('beer_id', '=', Input::get('beer_id') )->get();
		$beer->aveRating = $beer->rating;
		$beer->style->style_id = $beer->style->style_id;
		$beer->brewery->name = $beer->brewery->name;
		return Response::json( $beer );
	}

	/**
	 * Remove the specified beer from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ratings = Rating::where('beer_id', '=', $id)->get();

		foreach($ratings as $rating)
		{
			Rating::destroy($rating->rating_id);
		}
		Beer::destroy($id);

		return Response::json( ['all good' => $id] );
	}

	public function getBeerByIdAjax($id)
	{
		return Response::json( Beer::find($id) );
	}

}
