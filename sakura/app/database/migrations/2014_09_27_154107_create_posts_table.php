<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('posts');
            Schema::connection('sakura')->create('posts',function($table){
                $table->increments('post_id');
                $table->integer('thread_id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->longText('body');
                $table->timestamp('edited_on');
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
		//
            Schema::connection('sakura')->dropIfExists('posts');
	}

}
