<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('equipments', function($table) {
            $table->integer('staff_id')->unsigned();
            $table->integer('equip_id')->unsigned()->nullable();
            $table->datetime('assigned')->nullable();
            $table->datetime('returned')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->primary('staff_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('equipments');
    }

}
