<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Eloquent::unguard();

		$this->call('LocationsTableSeeder');
		// $this->call('BlocksTableSeeder');
		$this->call('BreweriesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('StylesTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('BeersTableSeeder');
		$this->call('RatingsTableSeeder');
		$this->call('PitchesTableSeeder');
		$this->call('WatchesTableSeeder');
		$this->call('ContributionsTableSeeder');
		$this->call('UpdatesTableSeeder');
		$this->call('ConfigTableSeeder');
	}

}
