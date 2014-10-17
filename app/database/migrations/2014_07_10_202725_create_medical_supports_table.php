<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalSupportsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('medical_supports', function($table) {
            $table->integer('mtk')->unsigned();
            $table->integer('ability_level')->default(null);
            $table->text('comments');
            $table->text('current_medical_concerns');
            $table->timestamps();
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
        Schema::connection('fcs_clients')->dropIfExists('medical_supports');
    }

}
