<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalSupports extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('goal_supports');
            Schema::connection('fcs_clients')->create('goal_supports', function($table){
               $table->integer('goal_id')->unsigned();
               $table->integer('support_id')->unsigned();
               
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
            Schema::connection('fcs_clients')->dropIfExists('goal_supports');
	}

}
