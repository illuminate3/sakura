<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('goals');
        Schema::connection('fcs_clients')->create('goals', function($table){
            
            $table->increments('goal_id');
            $table->integer('client_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->date('target_date');
            $table->date('established');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	            Schema::connection('fcs_clients')->dropIfExists('goals');

            //
	}

}
