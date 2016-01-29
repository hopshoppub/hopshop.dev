<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BeersTableSeeder extends Seeder {

	public function run()
	{
		$row = 1;

		if (($handle = fopen(storage_path() . "/csvs/beers.csv", "r")) !== FALSE) {
		   
		    while (($data = fgetcsv($handle)) !== FALSE) {

		    	try {
		    		$row++;
		    		$image = $row % 10;
		    		$image++;
		    		
		    		$beer = new Beer();

			        // $beer->beer_id = $data[0];
			        $beer->brewery_id = $data[1];
			        $beer->name = $data[2];
			        $beer->category_id = $data[3];
			        $beer->style_id = $data[4];
			        $beer->abv = $data[5];
			        $beer->ibu = $data[6];
			        $beer->upc = $data[8];
			        $beer->image = "category$image.jpeg";
			        $beer->description = $data[10];

			        $beer->save();
		    		
		    	} catch (Exception $e) {

		    	}

		    }
		    fclose($handle);
		}
	}

}