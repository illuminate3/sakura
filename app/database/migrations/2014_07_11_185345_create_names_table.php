<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNamesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('names', function($table) {
            $table->integer('staff_id');
            $table->string('first');
            $table->string('middle');
            $table->string('last');
            $table->timestamps();

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
        Schema::connection('fcs_staff')->dropIfExists('names');
    }

}
