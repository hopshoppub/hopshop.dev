<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LocationsTableSeeder extends Seeder {

	public function run()
    {
        DB::unprepared(file_get_contents(storage_path()."/csvs/locations.sql"));
    }
}