<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBeersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('beers', function(Blueprint $table)
		{
			$table->increments('beer_id');

			$table->integer('brewery_id')->unsigned()->foreign('brewery_id')->references('brewery_id')->on('breweries');
			$table->string('name',50);
			$table->integer('category_id')->unsigned()->foreign('category_id')->references('category_id')->on('categories');
			$table->integer('style_id')->unsigned()->foreign('style_id')->references('style_id')->on('styles');
			$table->decimal('abv',3,1);
			$table->decimal('ibu',3,1);
			$table->decimal('upc',3,1);
			$table->string('image',100);
			$table->text('description');
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
		Schema::drop('beers');
	}

}
