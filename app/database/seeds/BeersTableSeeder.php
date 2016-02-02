<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class BeersTableSeeder extends Seeder {

	public function run()
	{
		$row = 1;
		$desc = 'The colt 45 ruminates, or the change toward a Coors bestows great honor upon the most difficult steam engine. Any bar stool can graduate from the colt 45 over the lover, but it takes a real Yuengling to plan an escape from the porter living with the Honey Brown a ridiculously flatulent bar tab. For example, a Busch defined by a line dancer indicates that a Red Stripe avoids contact with a Honey Brown for an ESB. A bar tab hesitates, and the precise crank case laughs out loud; however, the corona light assimilates a Left Hand Milk Stout.';

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
			        $beer->description = ( $data[10] == false ) ? $desc : $data[10];

			        $beer->save();
		    		
		    	} catch (Exception $e) {

		    	}

		    }
		    fclose($handle);
		}
	}

}