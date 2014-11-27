<?php


use Illuminate\Database\Migrations\Migration;

class CreateAddressOrganizationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('address_organization', function($table) {
            $table->integer('org_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->primary('org_id');
            

           

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('address_organization');
    }

}
