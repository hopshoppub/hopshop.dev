<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BreweriesTableSeeder extends Seeder {

	public function run()
	{

		$row = 1;
		if (($handle = fopen(storage_path() . "/csvs/breweries.csv", "r")) !== FALSE) {
		    while (($data = fgetcsv($handle)) !== FALSE) {

		    	$zip = $data[6];
		    	// echo $zip . PHP_EOL;


		    	try {

			    	$loc = Location::where('postalCode',$zip)->firstOrFail();
		    		
			    	$locId = $loc->locId;
			    		
			    	$brewery = new Brewery();

			        $brewery->brewery_id = $data[0];
			        $brewery->name = $data[1];
			        $brewery->address = $data[2];
			        $brewery->phone = $data[8];
			        $brewery->website = $data[9];
			        $brewery->description = $data[11];
			        $brewery->locId = $locId;

			        $brewery->save();

		    	} catch (Exception $e) {
		    		
		    	}
		    }
		    fclose($handle);
		}

	}

}