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
			$table->text('statment')->nullable();
			$table->integer('goal');
			$table->string('image',200);
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
