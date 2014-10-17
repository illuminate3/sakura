<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShorttermDlsGoalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	
            Schema::connection('fcs_clients')->create('shortterm_dls_goals',function($table){
                $table->integer('mtk')->unsigned();
                $table->string('objective');
                $table->string('investment');
                $table->string('outcome');
                $table->string('intervention');
                $table->string('support');
                $table->integer('code');
                
                
                
                
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            
            Schema::connection('fcs_clients')->dropIfExists('shortterm_dls_goals');
	
	}

}
