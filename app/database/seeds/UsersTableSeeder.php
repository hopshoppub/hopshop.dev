<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$user = new User();
 		$user->first_name = $_ENV['USER_FIRST_NAME'];
 		$user->last_name = $_ENV['USER_LAST_NAME'];
 		$user->user_name = $_ENV['USER_NAME'];
 		$user->email = $_ENV['USER_EMAIL'];
 		$user->password = Hash::make($_ENV['USER_PASS']);
 		$user->zip_code = $_ENV['USER_ZIP'];
 		$user->role = $_ENV['USER_ROLE'];
 		$user->save();
	}
	
}