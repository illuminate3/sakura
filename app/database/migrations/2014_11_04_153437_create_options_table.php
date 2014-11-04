<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('survey')->create('options', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->integer('question_id')->unsigned();
			$table->text('body');
			$table->string('fieldtype');
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
		Schema::connection('survey')->drop('options');
	}

}
