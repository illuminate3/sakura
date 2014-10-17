<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsurerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('insurers', function($table) {
            $table->integer('insurer_id')->unsigned();
            $table->string('insurer_name', 45)->nullable();
            $table->integer('contact_id')->unsigned();
            $table->integer('org_id')->unsigned();
            $table->timestamps();
            
            $table->engine = 'InnoDB';
            $table->primary('insurer_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('insurers');
    }

}
