<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commentaries', function(Blueprint $table)
		{
			$table->integer('user_id')->unsigned();			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->increments('id');
			$table->string('comentario');
			$table->integer('post_id')->unsigned();			
			$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
			//$table->datetime('fecha');
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
		Schema::drop('commentaries');
	}

}
