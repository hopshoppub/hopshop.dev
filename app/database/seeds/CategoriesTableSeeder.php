<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder {

	public function run()
	{
		for($i = 0; $i < 59; $i++)
		{
			$style = new Category();

			$style->category_name = "$i";
			$style->image = "$i";

			$style->save();
		}
	}

}