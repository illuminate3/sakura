<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('threads');
            Schema::connection('sakura')->create('threads',function($table){
                $table->increments('thread_id');
                $table->integer('forum_id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->string('title');
                $table->string('description');
                
                
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
            Schema::connection('sakura')->dropIfExists('threads');
	}

}
