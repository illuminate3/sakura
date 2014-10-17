<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsCompleteTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('form_completes', function($table) {
            $table->integer('unqId');
            $table->integer('mtk')->unsigned();
            $table->integer('formId');
            $table->string('title', 45)->nullable();
            $table->string('relUrl', 45)->nullable();
            $table->dateTime('dateComplete');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('mtk');
            $table->unique('unqId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('form_completes');
    }

}
