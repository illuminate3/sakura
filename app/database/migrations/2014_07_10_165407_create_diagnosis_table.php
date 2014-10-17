<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('diagnoses', function($table) {
            $table->integer('mtk')->unsigned();
            $table->text('diagnosing_clinician');
            $table->date('date_of_diagnoses')->nullable();
            $table->string('axis_I')->nullable();
            $table->string('axis_II')->nullable();
            $table->string('axis_III')->nullable();
            $table->string('axis_IV')->nullable();
            $table->string('axis_V')->nullable();
            $table->string('locus')->nullable();
            $table->date('locus_date')->nullable();
            $table->string('chat')->nullable();
            $table->date('chat_date')->nullable();
            $table->string('cafas')->nullable();
            $table->date('cafas_date')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
            $table->primary('mtk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('diagnoses');
    }

}
