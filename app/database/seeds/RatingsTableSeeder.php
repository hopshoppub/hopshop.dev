<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RatingsTableSeeder extends Seeder {

	public function run()
	{
		$rating = new Rating();
		$rating->user_id = User::first()->user_id;
		$rating->beer_id = Beer::first()->beer_id;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();
	}

}