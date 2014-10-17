<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSsnTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('ssns', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('ssn', 45);
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('mtk');
            $table->unique('ssn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('ssns');
    }

}
