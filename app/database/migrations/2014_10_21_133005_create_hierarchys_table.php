<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHierarchysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_staff')->dropIfExists('hierarchys');
            Schema::connection('fcs_staff')->create('hierarchys', function($table){
                
                $table->increments('hierarchy_id');
                $table->integer('team_id')->unsigned();
                $table->integer('program_id')->unsigned();
                $table->integer('director_id')->unsigned();
                
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
            Schema::connection('fcs_staff')->dropIfExists('hierarchys');
	}

}
