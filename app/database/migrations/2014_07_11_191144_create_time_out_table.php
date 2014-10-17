<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeOutTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->dropIfExists('time_outs');
        Schema::connection('fcs_staff')->create('time_outs', function($table) {
            $table->integer('staff_id');
            $table->datetime('time_out');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('staff_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('time_outs');
    }

}
