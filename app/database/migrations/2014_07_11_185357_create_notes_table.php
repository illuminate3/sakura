<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('notes', function($table) {
            
            $table->integer('note_id');
            $table->string('title', 45);
            $table->string('rel_url', 45);
            $table->datetime('created');
            $table->datetime('changed')->nullable();
            $table->datetime('accessed')->nullable();
            

            $table->engine = 'InnoDB';
            $table->primary('note_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('notes');
    }

}
