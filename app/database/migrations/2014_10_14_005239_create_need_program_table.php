<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNeedProgramTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::connection('fcs_clients')->dropIfExists('need_program');
        Schema::connection('fcs_clients')->create('need_program', function($table) {
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
        Schema::connection('fcs_clients')->dropIfExists('need_program');
    }

}
