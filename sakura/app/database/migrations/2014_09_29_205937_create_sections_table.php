<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::connection('sakura')->dropIfExists('sections');
            Schema::connection('sakura')->create('sections', function($table){
                
                $table->increments('section_id');
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
            Schema::connection('sakura')->dropIfExists('sections');
	}

}
