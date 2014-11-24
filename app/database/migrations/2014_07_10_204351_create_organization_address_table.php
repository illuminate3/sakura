<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationAddressTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('organization_addresses', function($table) {
            $table->integer('org_id')->unsigned();
            $table->integer('address_id');
            $table->text('address1');
            $table->text('address2');
            $table->integer('zip_code_id')->unsigned();
            $table->primary('org_id');
            

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
        Schema::connection('fcs_clients')->dropIfExists('organization_addresses');
    }

}
