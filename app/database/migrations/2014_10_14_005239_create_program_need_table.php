<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramNeedTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::connection('fcs_clients')->dropIfExists('program_need');
        Schema::connection('fcs_clients')->create('program_need', function($table) {
            $table->integer('program_id')->unsigned();
            $table->integer('need_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::connection('fcs_clients')->dropIfExists('program_need');
    }

}
