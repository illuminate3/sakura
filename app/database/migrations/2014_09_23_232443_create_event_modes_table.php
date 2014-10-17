<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventModesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            
            /*
             * table realates to the scheduling section, where time periods are designated and must have a color, and a label. The mode suggests which calendar section the event will appear in.
             * 
             */
            Schema::connection('fcsdb')->create('event_modes', function($table){
                
                $table->increments('id');
                $table->string('mode');
                $table->string('label');
                $table->string('hex_color');
                
                
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
            Schema::connection('fcsdb')->dropIfExists('event_modes');
            
	}

}
