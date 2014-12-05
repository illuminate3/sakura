<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientMedsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
                Schema::connection('fcs_clients')->create('client_meds', function($table){
                    $table->increments('id');
                    $table->integer('mtk')->unsigned();
                    $table->string('productndc');
                    $table->date('started');
                    $table->date('stopped');
                    $table->integer('org_id')->unsigned();
                    $table->integer('contact_id')->unsigned();
                    $table->text('prescriber_notes');
                    $table->text('client_note');
                    $table->integer('staff_id');
                    $table->text('staff_note');
                    $table->longText('additional_history');
                    $table->timestamps();
                    
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
            Schema::connection('fcs_clients')->dropIfExists('client_meds');
	}

}
