<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentariesTableSeeder extends Seeder {

	public function run()
	{
		$commentaries=array(
			['user_id'=>1,'comentario'=>'Buen animo','post_id'=>1,'created_at'=>new dateTime,'updated_at'=>new dateTime]

			);
		DB::table('commentaries')->insert($commentaries);
	}

}