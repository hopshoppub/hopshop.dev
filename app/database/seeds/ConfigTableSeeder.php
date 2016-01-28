<?php
use Faker\Factory as Faker;
use Carbon\Carbon;

class ConfigTableSeeder extends Seeder {

	public function run()
	{
		$config = new Configuration;
		$config->name = 'beer_of_the_day_modification_date';
		$config->value = Carbon::now()->format('Y-m-d');
		$config->save();
	}

}