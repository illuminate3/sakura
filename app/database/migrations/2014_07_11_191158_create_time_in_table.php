<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeInTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('time_ins', function($table) {
            $table->integer('staff_id');
            $table->datetime('time_in');
            

            $table->engine = 'InnoDB';
            $table->primary(array('staff_id', 'time_in'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('time_ins');
    }

}
