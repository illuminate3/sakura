<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('interviews', function($table) {
            $table->integer('interview_id');
            $table->string('type', 45)->nullable();
            $table->integer('interviewer_id');
            $table->integer('staff_id');
            $table->text('notes');
            $table->datetime('conducted_date')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('interview_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('interviews');
    }

}
