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
		$this->call('BlocksTableSeeder');
		$this->call('BreweriesTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('BeersTableSeeder');
		$this->call('RatingsTableSeeder');
		$this->call('StylesTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('ContributionsTableSeeder');
		$this->call('WatchesTableSeeder');
		$this->call('PithcesTableSeeder');
		$this->call('UpdatesTableSeeder');
	}

}
