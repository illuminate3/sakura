<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateFederalEntitlementsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('state_federal_entitlements', function($table) {
            $table->integer('mtk')->unsigned();
            $table->smallInteger('federal');
            $table->smallInteger('state');
            $table->string('title');
            $table->string('value');
            $table->text('description');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('mtk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('state_federal_entitlements');
    }

}
