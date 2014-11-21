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
                    $table->integer('product_id')->unsigned();
                    $table->date('started');
                    $table->date('stopped');
                    $table->integer('contact_id')->unsigned();
                    $table->text('client_note');
                    $table->text('referal_note');
                    $table->integer('referer_id')->unsigned();
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
