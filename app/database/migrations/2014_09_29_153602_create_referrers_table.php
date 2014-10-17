<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferrersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('referrers');
            Schema::connection('fcs_clients')->create('referrers', function($table){
                $table->increments('referrer_id')->unsigned();
                $table->string('firstName');
                $table->string('lastName');
                $table->string('phoneNumber');
                $table->timestamps();
                $table->engine = 'innoDB';
                
                
                
                
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
            Schema::connection('fcs_clients')->dropIfExists('referrers');
	}

}
