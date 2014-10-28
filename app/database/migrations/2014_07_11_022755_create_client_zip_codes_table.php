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
            $table->increments('zip_code_id');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->timestamps();
            
            $table->engine = 'InnoDB';
            
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
