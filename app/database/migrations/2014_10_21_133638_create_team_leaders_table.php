<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamLeadersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_staff')->dropIfExists('team_leaders');
            Schema::connection('fcs_staff')->create('team_leaders', function($table){
               $table->increments('team_leader_id');
               $table->integer('staff_id');
               $table->integer('team_id');
               
               $table->primary(array('staff_id', 'team_leader_id', 'team_id'));
               
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
            Schema::connection('fcs_staff')->dropIfExists('team_leaders');
	}

}
