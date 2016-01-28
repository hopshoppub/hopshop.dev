<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UpdatesTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Update::create([

		// 	]);
		// }

		$updates = new Update();
		$updates->pitch_id = 1;
		$updates->update = "We are half way to our sales goal!  We are so proud of everyone's involvement.  Tell your friends.  More is on the way." ;
		$updates->save();

		$updates = new Update();
		$updates->pitch_id = 1;
		$updates->update = "We will be showing a new video this week showing our brewery facility.  Get excited." ;
		$updates->save();
	}

}