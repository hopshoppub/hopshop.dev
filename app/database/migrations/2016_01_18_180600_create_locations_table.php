<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
		{
			$table->integer('loc_id')->unsigned()->primary();
			$table->string('country', 2);
			$table->string('region',2);
			$table->string('city',50)->nullable()->default(null);
			$table->string('postalCode', 20);
			$table->double('latitude', 7, 4);
			$table->double('longitude', 7, 4);
			$table->integer('dmaCode')->default(null);
			$table->integer('areaCode')->default(null);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('locations');
	}

}
