<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_staff')->dropIfExists('staff_team');
            Schema::connection('fcs_staff')->create('staff_team', function($table){
                
                $table->integer('staff_id')->unsigned();
                $table->integer('team_id')->unsigned();
                
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
            Schema::connection('fcs_staff')->dropIfExists('staff_team');
	}

}
