<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOriginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_staff')->dropIfExists('origins');
            Schema::connection('fcs_staff')->create('origins', function($table){
               $table->increments('origin_id');
               $table->string('title');
               $table->string('description');
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
            Schema::connection('fcs_staff')->dropIfExists('origins');
	}

}
