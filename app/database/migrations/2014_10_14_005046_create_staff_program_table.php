<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffProgramTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::connection('fcs_clients')->dropIfExists('staff_program');
        Schema::connection('fcs_clients')->create('staff_program', function($table) {

            $table->integer('staff_id')->unsigned();
            $table->integer('program_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::connection('fcs_clients')->dropIfExists('staff_program');
    }

}
