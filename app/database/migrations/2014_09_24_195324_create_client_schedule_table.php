<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('client_schedules');
            Schema::connection('fcs_clients')->create('client_schedules',function($table){
                $table->integer('mtk')->unsigned();
                $table->integer('staff_id')->unsigned();
                $table->integer('editor_id')->unsigned();
                $table->integer('day_start')->unsigned();
                $table->integer('day_end')->unsigned();
                $table->time('time_start');
                $table->time('time_end');
                $table->timestamps();
                
                
                
                
                
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
            Schema::connection('fcs_clients')->dropIfExists('client_schedules');
	}

}
