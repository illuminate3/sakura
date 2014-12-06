<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupportMethodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('suport_methods');
            
            Schema::connection('fcs_clients')->create('support_methods', function($table){
                
               $table->increments('id');
               $table->integer('objective_id')->unsigned();
               $table->text('body');
               
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
            Schema::connection('fcs_clients')->dropIfExists('suport_methods');
	}

}
