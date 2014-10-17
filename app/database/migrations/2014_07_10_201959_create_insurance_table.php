<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsuranceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_clients')->create('insurances', function($table) {
            $table->integer('mtk')->unsigned();
            $table->integer('insurer_id')->unsigned();
            $table->string('policy_number', 45)->nullable();
            $table->timestamps();
            $table->engine = 'InnoDB';
            $table->primary('mtk');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_clients')->dropIfExists('insurances');
    }

}
