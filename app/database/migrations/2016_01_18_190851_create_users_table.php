<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('user_id');
			$table->string('email',250)->unique()->nullable();
			$table->string('password',255)->nullable();
			$table->string('first_name',50)->nullable();
			$table->string('last_name', 50)->nullable();
			$table->string('zip_code',10)->nullable()->index();
			$table->integer('role')->unsigned()->index();
			$table->integer('facebook_id')->unsigned()->index();
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
		Schema::drop('users');
	}

}
