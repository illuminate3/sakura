<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('addresses', function($table) {
            $table->integer('address_id')->unsigned();
            $table->string('address1', 45);
            $table->string('address2', 45)->nullable();
            $table->integer('zip_code_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
            $table->primary('address_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
       // DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::connection('fcs_clients')->dropIfExists('addresses');
    }

}
