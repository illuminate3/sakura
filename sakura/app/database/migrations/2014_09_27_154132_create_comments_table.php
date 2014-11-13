<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('comments');
            Schema::connection('sakura')->create('comments',function($table){
                
                $table->increments('comment_id');
                $table->integer('post_id')->unsigned();
                $table->integer('user_id')->unsigned();
                $table->text('body');
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
            
            Schema::connection('sakura')->dropIfExists('comments');
	}

}
