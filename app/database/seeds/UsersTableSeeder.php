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
 		$user->first_name = 'Billy';
 		$user->last_name = 'Jones';
 		$user->user_name = 'Billj';
 		$user->email = 'Bill@j.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Taco';
 		$user->last_name = 'Man';
 		$user->user_name = 'TacoMan';
 		$user->email = 'Taco@Man.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Beans';
 		$user->last_name = 'Rice';
 		$user->user_name = 'BeansAndRice';
 		$user->email = 'Beans@rice.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Faker';
 		$user->last_name = 'Fake';
 		$user->user_name = 'FakerFake';
 		$user->email = 'Fake@fake.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Faker';
 		$user->last_name = 'Fake';
 		$user->user_name = 'sfdsfsdfdsfs';
 		$user->email = 'Fake@fakfdfde.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Taco';
 		$user->last_name = 'Man';
 		$user->user_name = 'TacoMsdfan';
 		$user->email = 'Taco@Mans.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Bilfdly';
 		$user->last_name = 'Jones';
 		$user->user_name = 'Billdfdj';
 		$user->email = 'Bill@sadaj.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user = new User();
 		$user->first_name = 'Bisadslly';
 		$user->last_name = 'Jones';
 		$user->user_name = 'Bisadasdasdllj';
 		$user->email = 'Bill@sadsadasdasdj.com';
 		$user->password = Hash::make('password');
 		$user->zip_code = '78263';
 		$user->role = '1';
 		$user->save();

 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'sadf';
 		$user->email = 'lslslslsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'dhdhh';
 		$user->email = 'lskdkfjalkfj';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'fgjffh';
 		$user->email = 'klasdflkaf';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'dfgjdfgh';
 		$user->email = 'lslslslalksdfjalksfsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'loppsdfgsy';
 		$user->email = 'lslslsasdfafslsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'lopsfdgshdpy';
 		$user->email = 'lslsdhghhdlslsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'loppdfjdfjy';
 		$user->email = 'lslslserterlsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'loppsdfgsdgsdy';
 		$user->email = 'lslslsjdjdlsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'lopsdfhsdghspy';
 		$user->email = 'lslslslsfdgshsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();

 		$user = new User();
 		$user->first_name = 'dog face';
 		$user->last_name = 'wooot';
 		$user->user_name = 'lsdfhsdghsoppy';
 		$user->email = 'lslswerwrwlslsl';
 		$user->password = Hash::make('root');
 		$user->zip_code = '77861';
 		$user->role = 1;
 		$user->save();


	}
	
}