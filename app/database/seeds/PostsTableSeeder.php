<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$posts=array(
				['titulo'=>'Laravel Apendiendo','descripcion'=>'Ejemplo1','imagen'=>':)','contenido'=>'Imagen 1','tags'=>'Sonrisa','created_at'=>new dateTime,'updated_at'=>new dateTime,'user_id'=>1]		
		);
		DB::table('posts')->insert($posts);	
	}

}