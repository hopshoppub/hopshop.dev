<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRatingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ratings', function(Blueprint $table)
		{
			$table->increments('rating_id');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('user_id')->on('users');

			$table->integer('beer_id')->unsigned();
			$table->foreign('beer_id')->references('beer_id')->on('beers');

			$table->unique(['beer_id', 'user_id']);

			$table->string('rating', 1);
			$table->string('comment',300);

			$table->softDeletes();
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
		Schema::drop('ratings');
	}

}
