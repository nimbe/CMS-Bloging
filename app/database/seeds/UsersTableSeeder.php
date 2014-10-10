<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users=array(['nombre'=>'Nimbe','email'=>'luz.dehada@hotmail.com','username'=>'nimbeC','password'=>'12345',
			'rol'=>'Administrador','activo'=>true,'created_at'=>new dateTime,'updated_at'=>new dateTime]
			);
		DB::table('users')->insert($users);
	}

}