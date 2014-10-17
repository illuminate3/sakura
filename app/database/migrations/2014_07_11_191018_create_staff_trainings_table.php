<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTrainingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('staff_trainings', function($table) {
            $table->integer('staff_id');
            $table->integer('training_id');
            $table->integer('scheduled');
            $table->integer('completed');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::connection('fcs_staff')->dropIfExists('staff_trainings');
    }

}
