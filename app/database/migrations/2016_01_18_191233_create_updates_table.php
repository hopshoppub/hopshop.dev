<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUpdatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('updates', function(Blueprint $table)
		{
			$table->increments('update_id');

			$table->integer('pitch_id')->unsigned()->foreign('pitch_id')->references('pitch_id')->on('pitches');

			$table->integer('user_id')->unsigned()->foreign('user_id')->references('user_id')->on('users');

			$table->text('update');
			
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
		Schema::drop('updates');
	}

}
