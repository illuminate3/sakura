<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffZipCodesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('zip_codes', function($table) {
            $table->increments('zip_code_id');
            $table->string('state');
            $table->string('city');
            $table->string('county');
            $table->string('zipcode');
            $table->string('longitude');
            $table->string('latitude');
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        
       
        Schema::connection('fcs_staff')->dropIfExists('zip_codes');
    }

}
