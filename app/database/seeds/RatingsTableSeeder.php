<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RatingsTableSeeder extends Seeder {

	public function run()
	{
		$rating = new Rating();
		$rating->user_id = 1;
		$rating->beer_id = 9;
		$rating->rating = '5';
		$rating->comment = 'Great Beer!';
		$rating->save();


    	// $faker = Faker::create();
    	// foreach (range(1,1000) as $index) {
	    //     DB::table('users')->insert([
	    //     	'user_id' => $faker->numberBetween(1,100),
	    //         'beer_id' => $faker->numberBetween(10,200),
	    //         'rating' => $faker->numberBetween(1,5),
	    //         'comment' => $faker->paragraph,
	    //     ]);
     //    }
	}

}