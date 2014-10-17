<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrivetimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_staff')->create('drivetimes', function($table){
                $table->integer('mtk')->unsigned();
                $table->integer('origin_id');
                $table->integer('miles');
                $table->time('drivetime');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::connection('fcs_staff')->dropIfExists('drivetimes');
		//
	}

}
