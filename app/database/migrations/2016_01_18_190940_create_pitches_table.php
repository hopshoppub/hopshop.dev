<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePitchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pitches', function(Blueprint $table)
		{
			$table->increments('pitch_id');

			$table->integer('user_id')->unsigned();
			$table->integer('brewery_id')->unsigned();
			$table->string('title');
			$table->text('campaign')->nullable();
			$table->integer('goal');
			$table->date('deadline');
			$table->string('video',200);
			$table->text('recipe');

			
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
		Schema::drop('pitches');
	}

}
