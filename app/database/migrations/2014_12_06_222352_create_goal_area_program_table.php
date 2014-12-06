<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalAreaProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('goal_area_program');
            Schema::connection('fcs_clients')->create('goal_area_program', function($table){
                
                $table->integer('goal_area_id')->unsigned();
                $table->integer('program_id')->unsigned();
                
                
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
            Schema::connection('fcs_clients')->dropIfExists('goal_area_program');
	}

}
