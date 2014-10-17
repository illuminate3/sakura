<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllergensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::connection('fcs_clients')->dropIfExists('allergens');
            Schema::connection('fcs_clients')->create('allergens', function($table){
                $table->increments('allergen_id');
                $table->string('title');
                $table->string('description');
                });
		//
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
            Schema::connection('fcs_clients')->dropIfExists('allergens');
	}

}
