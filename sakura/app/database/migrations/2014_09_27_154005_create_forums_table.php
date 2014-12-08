<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('forums');
            Schema::connection('sakura')->create('forums',function($table){
             $table->increments('forum_id');
             $table->integer('user_id')->unsigned();
             $table->integer('section_id')->unsigned();
             $table->string('title');
             $table->string('description');
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
            Schema::connection('sakura')->dropIfExists('forums');
	}

}
