<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StylesTableSeeder extends Seeder {

	public function run()
	{
		$row = 0;
		if (($handle = fopen(storage_path() . "/csvs/styles.csv", "r")) !== FALSE) {
		   
		    while (($data = fgetcsv($handle)) !== FALSE) {

		    	$row++;
		    	if($row > 1) {
			    	try {
			    		
			    		$style = new Style();
			    		$style->style_name = $data[2];
				        // $beer->beer_id = $data[0];
				       

				        $style->save();
			    		
			    	} catch (Exception $e) {

			    	}
			    }

		    }
		    fclose($handle);
		}
	}

}