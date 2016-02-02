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

 		$user = new User();
 		$user->first_name = 'admin';
 		$user->last_name = 'admin';
 		$user->user_name = 'admin';
 		$user->email = 'admin@hop.com';
 		$user->password = Hash::make('expo');
 		$user->zip_code = '78163';
 		$user->role = '3';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Ryan';
 		$user->last_name = 'Bentkowski';
 		$user->user_name = 'RyanSki';
 		$user->email = 'ryan@hop.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78163';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Shawn';
 		$user->last_name = 'Pivonka';
 		$user->user_name = 'SPiv';
 		$user->email = 'shawn@hop.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Vaughn';
 		$user->last_name = 'Albardo';
 		$user->user_name = 'Vaughn';
 		$user->email = 'vaughn@hop.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Tony';
 		$user->last_name = 'Burns';
 		$user->user_name = 'Tony';
 		$user->email = 'Tony@hop.com';
 		$user->password = Hash::make('wood');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Zeshan';
 		$user->last_name = 'Segal';
 		$user->user_name = 'Z';
 		$user->email = 'z@hop.com';
 		$user->password = Hash::make('chess');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Reagan';
 		$user->last_name = 'Trinity';
 		$user->user_name = 'Reagan';
 		$user->email = 'reagan@hop.com';
 		$user->password = Hash::make('wood');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Ryan';
 		$user->last_name = 'Orsinger';
 		$user->user_name = 'RyanO';
 		$user->email = 'ryano@hop.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user->first_name = 'Ben';
 		$user->last_name = 'Batschelet';
 		$user->user_name = 'Ben';
 		$user->email = 'ben@hop.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Chris';
 		$user->last_name = 'Turner';
 		$user->user_name = 'Chris';
 		$user->email = 'chris@hop.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Elvis';
 		$user->last_name = 'Presley';
 		$user->user_name = 'theking';
 		$user->email = 'elvis@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();

 		$user->first_name = 'M';
 		$user->last_name = 'K';
 		$user->user_name = 'mk';
 		$user->email = 'mk@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Elon';
 		$user->last_name = 'Musk';
 		$user->user_name = 'elon';
 		$user->email = 'elon@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Steve';
 		$user->last_name = 'Jobs';
 		$user->user_name = 'Steve';
 		$user->email = 'steve@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Bill';
 		$user->last_name = 'Gates';
 		$user->user_name = 'bill';
 		$user->email = 'bill@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Rihanna';
 		$user->last_name = 'None';
 		$user->user_name = 'rihanna';
 		$user->email = 'rihanna@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Madonna';
 		$user->last_name = 'None';
 		$user->user_name = 'madonna';
 		$user->email = 'madonna@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Natalie';
 		$user->last_name = 'Portman';
 		$user->user_name = 'natalie@hop.com';
 		$user->email = 'natalie@hop.com';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();


	}
	
}