<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientNeedTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::connection('fcs_clients')->dropIfExists('client_need');
        Schema::connection('fcs_clients')->create('client_need', function($table) {

            $table->integer('mtk')->unsigned();
            $table->integer('need_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::connection('fcs_clients')->dropIfExists('client_need');
    }

}
