<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResultsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('survey')->create('results', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('survey_id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->integer('option_id')->unsigned();
			$table->text('result');
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
		Schema::connection('survey')->drop('results');
	}

}
