<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientPhoneTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('client_phones', function($table) {

            $table->integer('mtk')->unsigned();
            $table->primary('mtk');
            $table->string('home', 45)->nullable();
            $table->string('cell', 45)->nullable();
            $table->string('work', 45)->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('client_phones');
    }

}
