<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('profiles');
            Schema::connection('sakura')->create('profiles',function($table){
                
                $table->integer('user_id')->unsigned();
                $table->string('first_name');
                $table->string('last_name');
                $table->text('bio');
                $table->string('email')->nullable();
                $table->string('website')->nullable();
                $table->string('avatar_image')->nullable();
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
            Schema::connection('sakura')->dropIfExists('profiles');
	}

}
