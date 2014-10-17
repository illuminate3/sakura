<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
             Schema::connection('fcs_staff')->create('shifts', function($table) {
            $table->increments('shift_id');
            $table->integer('staff_id')->unsigned();
            $table->integer('editor_id')->unsigned();
            $table->integer('daystart')->unsigned();
            $table->integer('dayend')->unsigned();
            $table->tinyInteger('allday');
            $table->time('timestart');
            $table->time('timeend');
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
            
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
            Schema::connection('fcs_staff')->dropIfExists('shifts');
	}

}
