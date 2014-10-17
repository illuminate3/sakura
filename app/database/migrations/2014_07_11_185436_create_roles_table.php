<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('roles', function($table) {
            $table->integer('role_id');
            $table->string('title', 45);
            $table->text('description')->nullable();
            
            $table->engine = 'InnoDB';
            $table->primary('role_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('roles');
    }

}
