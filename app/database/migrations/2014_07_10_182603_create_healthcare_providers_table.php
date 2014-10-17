<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthcareProvidersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('healthcareProviders', function($table) {
            $table->integer('mtk')->unsigned();
            $table->integer('providerType');
            $table->string('frequencySeen', 45)->nullable();
            $table->date('lastSeen')->nullable();
            $table->integer('org_id')->unsigned(); // Organization table
            $table->integer('contact_id')->unsigned(); // Contact ID table
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->primary('mtk');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('healthcareProviders');
    }

}
