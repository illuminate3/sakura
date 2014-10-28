<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientProgramTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('client_program');
            
            Schema::connection('fcs_clients')->create('client_program', function($table){
                
                $table->integer('mtk')->unsigned();
                $table->integer('program_id')->unsigned();    
                
                $table->primary('mtk','program_id');
                
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
            Schema::connection('fcs_clients')->dropIfExists('client_program');
	}

}
