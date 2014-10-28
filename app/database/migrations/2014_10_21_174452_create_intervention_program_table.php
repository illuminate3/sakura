<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterventionProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('intervention_program');
            Schema::connection('fcs_clients')->create('intervention_program', function($table){
                
                $table->integer('intervention_id')->unsigned();
                $table->integer('program_id')->unsigned();
                
                $table->primary('intervention_id', 'program_id');
                
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
            Schema::connection('fcs_clients')->dropIfExists('intervention_program');
	}

}
