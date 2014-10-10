<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class LogsTableSeeder extends Seeder {

	public function run()
	{
		$logs=array(
				['user_id'=>1,'descripcion'=>'log','post_id'=>1,'created_at'=>new dateTime,'updated_at'=>new dateTime]
				
		);
		DB::table('logs')->insert($logs);	
	}

}