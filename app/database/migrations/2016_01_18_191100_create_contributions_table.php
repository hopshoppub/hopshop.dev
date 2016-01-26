<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContributionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contributions', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('user_id')->on('users');

			$table->integer('pitch_id')->unsigned();
			$table->foreign('pitch_id')->references('pitch_id')->on('pitches');

			$table->primary( ['user_id', 'pitch_id'] );

			$table->decimal('amount', 6, 2);

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
		Schema::drop('contributions');
	}

}
