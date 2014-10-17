<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientZipCodesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('zip_codes', function($table) {
            $table->integer('zip_code_id')->unsigned();
            $table->string('city');
            $table->string('state');
            $table->integer('zipcode');
            $table->timestamps();
            
            $table->engine = 'InnoDB';
            $table->primary('zip_code_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
         
        Schema::connection('fcs_clients')->dropIfExists('zip_codes');
    }

}
