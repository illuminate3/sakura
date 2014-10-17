<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcOkTestTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('ac_ok_test', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('score', 45)->nullable();
            $table->date('completed')->nullable();
            
            $table->softDeletes();

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
        Schema::connection('fcs_clients')->dropIfExists('ac_ok_test');
    }

}
