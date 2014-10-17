<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaperWorkTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('paperworks', function($table) {
            $table->integer('staff_id')->unsigned();
            $table->integer('paperwork_id')->unsigned();
            $table->integer('interview_id')->nullable();
            $table->datetime('completion_date')->nullable();
            $table->integer('staff_verified_id')->nullable();
            $table->integer('admin_verified_id')->nullable();
            

            $table->engine = 'InnoDB';
            $table->primary('paperwork_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('paperworks');
    }

}
