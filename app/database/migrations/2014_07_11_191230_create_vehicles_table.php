<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::connection('fcs_staff')->create('vehicles', function($table) {
            $table->integer('staff_id');
            $table->string('make', 45);
            $table->string('model', 45);
            $table->string('year', 45);
            $table->tinyInteger('insurance_verified')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->engine = 'InnoDB';
            $table->primary('staff_id');
            // TO-DO: find out if foreign keys are needed.
            //$table->foreign('staff_id')->references('staff_id')->on('fcsdb.users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::connection('fcs_staff')->dropIfExists('vehicles');
    }

}
