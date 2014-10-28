<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionInterventionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('action_intervention');
            
            Schema::connection('fcs_clients')->create('action_intervention', function($table){
                
                $table->integer('action_id')->unsigned();
                $table->integer('intervention_id')->unsigned();
                
                $table->primary(array('action_id', 'intervention_id'));
                
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
            Schema::connection('fcs_clients')->dropIfExists('action_intervention');
	}

}
