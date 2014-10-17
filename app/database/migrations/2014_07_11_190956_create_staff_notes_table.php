<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffNotesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('staff_notes', function($table) {
            $table->increments('id');
            $table->integer('staff_id');
            $table->integer('note_id');
            
            $table->softDeletes();

            $table->engine = 'InnoDB';
            $table->unique('note_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('staff_notes');
    }

}
