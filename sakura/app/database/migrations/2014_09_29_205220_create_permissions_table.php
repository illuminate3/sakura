<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('sakura')->dropIfExists('permissions');
            Schema::connection('sakura')->create('permissions',function($table){
                
                $table->increments('id');
                $table->integer('user_id');
                $table->integer('role_id');
                
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
            
            Schema::connection('sakura')->dropIfExists('permissions');
            
            
	}

}
