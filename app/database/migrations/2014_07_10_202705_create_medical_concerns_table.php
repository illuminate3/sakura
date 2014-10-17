<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalConcernsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('medical_concerns', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('description', 45)->nullable();
            $table->text('comments');
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
        Schema::connection('fcs_clients')->dropIfExists('medical_concerns');
    }

}
