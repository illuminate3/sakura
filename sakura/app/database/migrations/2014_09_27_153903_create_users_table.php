<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('users');
            Schema::connection('sakura')->create('users', function($table){
                $table->increments('user_id');
                $table->string('username','128');
                $table->string('password','255');
                $table->string('remember_token','255');
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
            Schema::connection('sakura')->dropIfExists('users');
        }

}
