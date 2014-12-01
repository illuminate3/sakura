<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientAvailabilityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
            Schema::connection('fcs_clients')->create('client_availabilitys',function($table){
                $table->increments('id');
                $table->integer('mtk')->unsigned();
                $table->integer('editor_id')->unsigned();
                $table->integer('daystart')->unsigned();
                $table->integer('dayend')->unsigned();
                $table->time('timestart');
                $table->time('timeend');
                $table->tinyInteger('allday');    
                $table->primaryKey('id');
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
            Schema::connection('fcs_clients')->dropIfExists('client_availabilitys');
	}

}
