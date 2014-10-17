<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->dropIfExists('contacts');
        Schema::connection('fcs_clients')->create('contacts', function($table) {
            $table->integer('org_id')->unsigned();
            $table->increments('contact_id');
            $table->string('first', 45)->nullable();
            $table->string('last', 45)->nullable();
            $table->string('title', 45)->nullable();
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
        Schema::connection('fcs_clients')->dropIfExists('contacts');
    }

}
