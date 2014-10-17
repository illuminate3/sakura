<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReleasesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('releases', function($table) {
            $table->integer('mtk')->unsigned();
            $table->integer('unq_id');
            $table->integer('org_id');
            $table->integer('contact_id');
            $table->integer('form_id');
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
        Schema::connection('fcs_clients')->dropIfExists('releases');
    }

}
