<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ContributionsTableSeeder extends Seeder {

	public function run()
	{
		// $faker = Faker::create();

		// foreach(range(1, 10) as $index)
		// {
		// 	Contribution::create([

		// 	]);
		// }
		$contribution = new Contribution();
		$contribution->user_id = 1;
		$contribution->pitch_id = 1;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 2;
		$contribution->pitch_id = 1;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 3;
		$contribution->pitch_id = 1;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 4;
		$contribution->pitch_id = 1;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 5;
		$contribution->pitch_id = 1;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 1;
		$contribution->pitch_id = 2;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 2;
		$contribution->pitch_id = 2;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 3;
		$contribution->pitch_id = 2;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 4;
		$contribution->pitch_id = 2;
		$contribution->amount = "20";
		$contribution->save();

		$contribution = new Contribution();
		$contribution->user_id = 5;
		$contribution->pitch_id = 2;
		$contribution->amount = "20";
		$contribution->save();


	}

}