<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWatchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('watches', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned()->foreign('user_id')->references('user_id')->on('users');
			$table->integer('pitch_id')->unsigned()->foreign('pitch_id')->references('pitch_id')->on('pitches');

			$table->primary( [ 'user_id' , 'pitch_id'] );

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
		Schema::drop('watches');
	}

}
