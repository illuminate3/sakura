<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailAddressTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('mail_addresses', function($table) {
            $table->integer('staff_id');
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->integer('zip_code_id')->nullable();
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
        Schema::connection('fcs_staff')->dropIfExists('mail_addresses');
    }

}
