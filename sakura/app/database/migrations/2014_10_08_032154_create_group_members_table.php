<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfNotExists('group_members');
            Schema::connection('sakura')->create('group_members', function($table){
                $table->integer('group_id')->unsigned();
                $table->integer('user_id')->unsigned();
                
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
            Schema::connection('sakura')->dropIfNotExists('group_members');
	}

}
