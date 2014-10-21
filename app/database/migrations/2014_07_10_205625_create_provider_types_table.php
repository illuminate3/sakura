<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProviderTypesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('provider_types', function($table) {
            $table->integer('provider_id');
            $table->string('title', 45);
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('provider_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('provider_types');
    }

}
