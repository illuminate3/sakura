<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('trainings', function($table) {
            $table->integer('training_id');
            $table->string('title', 45);
            $table->text('description');
            $table->datetime('implemented');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('training_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('trainings');
    }

}
