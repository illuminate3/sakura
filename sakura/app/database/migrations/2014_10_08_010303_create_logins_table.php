<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('logins');
            Schema::connection('sakura')->create('logins', function($table){
                $table->integer('user_id')->unsigned();
                $table->tinyInteger('success');
                $table->timestamp('login');
                $table->timestamp('logout');
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
            Schema::connection('sakura')->dropIfExists('logins');
	}

}
