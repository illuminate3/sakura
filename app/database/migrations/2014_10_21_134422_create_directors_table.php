<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_staff')->dropIfExists('directors');
        Schema::connection('fcs_staff')->create('directors', function($table){
            
            $table->increments('director_id');
            $table->integer('staff_id')->unsigned();
            
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
                        Schema::connection('fcs_staff')->dropIfExists('directors');
	}

}
