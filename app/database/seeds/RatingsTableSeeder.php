<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RatingsTableSeeder extends Seeder {

	public function run()
	{
		$rating = new Rating();
		$rating->user_id =1;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =2;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =3;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =4;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =5;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =6;
		$rating->beer_id = 63;
		$rating->rating = '1';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =7;
		$rating->beer_id = 63;
		$rating->rating = '1';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =8;
		$rating->beer_id = 63;
		$rating->rating = '4';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id =9;
		$rating->beer_id = 63;
		$rating->rating = '4';
		$rating->comment = 'Great Beer!';
		$rating->save();
		$rating = new Rating();
		$rating->user_id =10;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 11;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 12;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 13;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 14;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 15;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 16;
		$rating->beer_id = 63;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 17;
		$rating->beer_id = 73;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

		$rating = new Rating();
		$rating->user_id = 18;
		$rating->beer_id = 73;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();

    	
	}

}