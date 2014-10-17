<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientNamesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('client_names', function($table) {
            $table->integer('mtk')->unsigned();
            $table->string('first', 45)->nullable();
            $table->string('middle', 45)->nullable();
            $table->string('last', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->primary('mtk');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('client_names');
    }

}
