<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientAddressTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
       /* Schema::connection('fcs_clients')->create('client_addresses', function($table) {
            $table->integer('mtk')->unsigned();
            $table->integer('address_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->engine = 'InnoDB';
            $table->primary('mtk');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //Schema::connection('fcs_clients')->dropIfExists('client_addresses');
    }

}
