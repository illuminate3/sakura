<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::connection('sakura')->dropIfExists('roles');
                Schema::connection('sakura')->create('roles',function($table){
                    $table->increments('role_id');
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
            Schema::connection('sakura')->dropIfExists('roles');
	}

}
