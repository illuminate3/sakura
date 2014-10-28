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
            $table->integer('zip_code_id');
            $table->string('zip_code');
            $table->string('city', 45);
            $table->string('state', 45);
            $table->timestamps();
            $table->softDeletes();

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
        
       
        Schema::connection('fcs_staff')->dropIfExists('zip_codes');
    }

}
