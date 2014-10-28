<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActionProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('action_program');
            Schema::connection('fcs_clients')->create('action_program', function($table){
                
                $table->integer('action_id')->unsigned();
                $table->integer('program_id')->unsigned();
                $table->primary(array('action_id', 'program_id'));
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
                        Schema::connection('fcs_clients')->dropIfExists('action_program');

	}

}
