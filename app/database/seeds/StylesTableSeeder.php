<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StylesTableSeeder extends Seeder {

	public function run()
	{
		for($i = 0; $i < 150; $i++)
		{
			$style = new Style();

			$style->style_name = "$i";
			$style->image = "$i";

			$style->save();
		}
	}

}