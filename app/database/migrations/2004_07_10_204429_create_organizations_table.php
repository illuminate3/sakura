<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->dropIfExists('organizations');
        Schema::connection('fcs_clients')->create('organizations', function($table) {
            $table->integer('org_id')->unsigned();
            $table->string('title');
            $table->string('description');
            //$table->integer('address_id')->unsigned();
           // $table->integer('zip_code_id')->unsigned();
           
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
            $table->primary('org_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('organizations');
    }

}
