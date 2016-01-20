<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBreweriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('breweries', function(Blueprint $table)
		{
			// $table->increments('brewery_id');
			$table->integer('brewery_id')->unsigned();
			$table->string('name',100);
			$table->string('address',100);
			$table->string('phone',20);
			$table->string('website',100);
			$table->text('description');
			$table->integer('locId')->unsigned();
			$table->foreign('locId')->references('locId')->on('locations');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('breweries');
	}

}
