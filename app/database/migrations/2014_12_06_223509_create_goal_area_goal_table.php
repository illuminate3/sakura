<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalAreaGoalTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('goal_goal_area');
            Schema::connection('fcs_clients')->create('goal_goal_area',function($table){
                $table->integer('goal_id')->unsigned();
                
                $table->integer('goal_area_id')->unsigned();
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
            Schema::connection('fcs_clients')->dropIfExists('goal_goal_area');
	}

}
