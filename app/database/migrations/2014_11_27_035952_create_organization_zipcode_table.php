<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationZipcodeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::connection('fcs_clients')->dropIfExists('organization_zipcode');
            Schema::connection('fcs_clients')->create('organization_zipcode', function($table){
               $table->integer('org_id')->unsigned();
               $table->integer('zip_code_id')->unsigned();
                
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
            Schema::connection('fcs_clients')->dropIfExists('organization_zipcode');
	}

}
