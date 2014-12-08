<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarriersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('barriers');
            Schema::connection('fcs_clients')->create('barriers', function($table){
                $table->increments('id');
                $table->integer('objective_id')->unsigned();
                $table->text('personal');
                $table->text('resource');
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
            Schema::connection('fcs_clients')->dropIfExists('barriers');
	}

}
