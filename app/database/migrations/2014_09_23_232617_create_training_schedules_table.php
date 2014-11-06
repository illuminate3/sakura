<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::connection('fcs_staff')->create('training_schedules', function($table){
                $table->increments('id');
                $table->integer('training_id')->unsigned();
                $table->integer('staff_id')->unsigned();
                $table->date('day');
                $table->time('time');
                
                
                
            });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
            Schema::connection('fcs_staff')->dropIfExists('training_schedules');
            
	}

}
