<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('supports');
                Schema::connection('fcs_clients')->create('supports', function($table){
                    $table->increments('id');
                    
                    $table->integer('staff_id');
                    $table->integer('program_id');
                    $table->integer('organization_id');
                    $table->integer('contact_id');
                    $table->text('additional');
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
            Schema::connection('fcs_clients')->dropIfExists('supports');
	}

}
