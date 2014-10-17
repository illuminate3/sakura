<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationPhonesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('organization_phones', function($table) {
            $table->integer('org_id')->unsigned();
            $table->primary('org_id');
            
            $table->timestamps();
            $table->string('local', 45)->nullable();
            $table->string('tollfree', 45)->nullable();
            $table->string('fax', 45)->nullable();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('organization_phones');
    }

}
