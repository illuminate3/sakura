<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePossibleAssisstanceSourcesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('possible_assistance_sources', function($table) {
            $table->integer('mtk')->unsigned();
            $table->integer('rank');
            $table->text('service');
            $table->text('need');
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
        Schema::connection('fcs_clients')->dropIfExists('possible_assistance_sources');
    }

}
