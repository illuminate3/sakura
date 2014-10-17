<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffContactInfoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('staff_contact_info', function($table) {
            $table->integer('staff_id')->unsigned();
            $table->string('primary_phone', 45)->nullable();
            $table->string('cell_phone', 45)->nullable();
            $table->string('cell_provider', 45)->nullable();
            $table->string('personal_email', 45)->nullable();
            $table->string('company_email', 45)->nullable();
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
        Schema::connection('fcs_staff')->dropIfExists('staff_contact_info');
    }

}
