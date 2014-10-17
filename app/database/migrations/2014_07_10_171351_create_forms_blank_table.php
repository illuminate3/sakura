<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsBlankTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('form_blanks', function($table) {
            $table->integer('form_id');
            $table->string('form_title', 45)->nullable();
            $table->string('rel_url', 45)->nullable();
            $table->date('updated_date')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('form_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('form_blanks');
    }

}
