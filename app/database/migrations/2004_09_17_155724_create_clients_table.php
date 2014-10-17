<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::connection('fcs_clients')->create('clients', function($table) {
           $table->integer('mtk')->unsigned();
           $table->timestamps();
           $table->softDeletes();
           $table->engine = "InnoDB";
           $table->primary('mtk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        
        Schema::connection('fcs_clients')->dropIfExists('clients');
    }

}
