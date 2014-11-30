<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('diagnosis_services');
            Schema::connection('fcs_clients')->create('diagnosis_services',function($table){
                $table->integer('diagnosis_id')->unsigned();
                $table->integer('services_id')->unsigned();
                        
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
            Schema::connection('fcs_clients')->dropIfExists('diagnosis_services');
	}

}
