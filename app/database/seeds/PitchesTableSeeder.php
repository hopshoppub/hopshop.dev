<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PitchesTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Pitch::create([

		// 	]);
		// }

		$pitch = new Pitch();
		$pitch->user_id = 1;
		$pitch->brewery_id = 1;
		$pitch->title = "Alamomode";
		$pitch->campaign = "This is a beer for beer and ice cream fans.  We have some great ideas to make this happen.  Keep updated here for further info.";
		$pitch->goal = "5000";
		$pitch->deadline ="2016-02-29";
		$pitch->video = "https://www.youtube.com/embed/aV36ytSgC3o";
		$pitch->recipe = "100 lbs of hops and 50 lbs of wheat";
		$pitch->save();

		$pitch = new Pitch();
		$pitch->user_id = 2;
		$pitch->brewery_id = 2;
		$pitch->title = "UPA";
		$pitch->campaign = "This is an unusual pale ale.  Lets get started. ";
		$pitch->goal = "4000";
		$pitch->deadline = "2016-03-28";
		$pitch->video = "https://www.youtube.com/embed/aV36ytSgC3o";
		$pitch->recipe = "200 lbs of hops and 50 lbs of barley";
		$pitch->save();


	}

}